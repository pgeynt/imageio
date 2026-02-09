<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Database;
use App\ImageDownloader;
use App\ExcelImport;
use App\ExcelExport;
use App\ZipExport;

// ── Config ──────────────────────────────────────────────────────────────────
$config = require __DIR__ . '/../config.php';
$pdo = Database::connect($config['db']);
Database::migrate($pdo);

$appUrl  = $config['app_url'];
$storagePath = $config['storage_path'];

// ── Session & Router ────────────────────────────────────────────────────────
session_start();

$page   = $_GET['page'] ?? 'home';
$action = $_POST['action'] ?? $_GET['action'] ?? null;
$msg    = null;

if (isset($_SESSION['flash'])) {
    $msg = $_SESSION['flash'];
    unset($_SESSION['flash']);
}

function flash(string $message, string $type = 'success'): void
{
    $_SESSION['flash'] = ['message' => $message, 'type' => $type];
}

function redirect(string $url): void
{
    header('Location: ' . $url);
    exit;
}

function e(string $str): string
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

// ── Handle storage file serving ─────────────────────────────────────────────
if ($page === 'storage') {
    $file = $_GET['file'] ?? '';
    $file = str_replace(['..', "\0"], '', $file);
    $fullPath = $storagePath . '/' . $file;

    if (!file_exists($fullPath) || !is_file($fullPath)) {
        http_response_code(404);
        echo 'Dosya bulunamadi.';
        exit;
    }

    $mime = mime_content_type($fullPath) ?: 'application/octet-stream';
    header('Content-Type: ' . $mime);
    header('Content-Length: ' . filesize($fullPath));
    header('Cache-Control: public, max-age=86400');
    readfile($fullPath);
    exit;
}

// ── Handle POST actions ─────────────────────────────────────────────────────
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    switch ($action) {
        case 'create_brand':
            $name = trim($_POST['name'] ?? '');
            $type = in_array($_POST['type'] ?? '', ['brand', 'category']) ? $_POST['type'] : 'brand';
            if ($name) {
                Database::createBrand($pdo, $name, $type);
                flash($type === 'brand' ? 'Marka olusturuldu.' : 'Kategori olusturuldu.');
            }
            redirect('?page=home');
            break;

        case 'delete_brand':
            $id = (int) ($_POST['brand_id'] ?? 0);
            if ($id) {
                // Delete storage files
                $images = Database::getImagesByBrand($pdo, $id);
                foreach ($images as $img) {
                    $fp = $storagePath . '/' . $img['storage_path'];
                    if (file_exists($fp)) @unlink($fp);
                }
                Database::deleteBrand($pdo, $id);
                flash('Silindi.');
            }
            redirect('?page=home');
            break;

        case 'upload_single':
            $brandId = (int) ($_POST['brand_id'] ?? 0);
            $title   = trim($_POST['title'] ?? '');
            if (!$brandId || !$title) {
                flash('Marka ve baslik zorunlu.', 'error');
                redirect('?page=upload');
                break;
            }

            $itemId = Database::createItem($pdo, $brandId, $title);
            $downloader = new ImageDownloader($config);
            $uploadedCount = 0;

            for ($i = 1; $i <= 5; $i++) {
                $key = 'image_' . $i;
                if (!isset($_FILES[$key]) || $_FILES[$key]['error'] === UPLOAD_ERR_NO_FILE) {
                    continue;
                }

                $result = $downloader->saveUploadedFile($_FILES[$key], $brandId, $itemId);
                if ($result) {
                    [$path, $filename] = $result;
                    $imageId = Database::createImage($pdo, $itemId, $i);
                    Database::updateImageDownloaded($pdo, $imageId, $path, $filename);
                    $uploadedCount++;
                }
            }

            flash($uploadedCount . ' gorsel yuklendi.');
            redirect('?page=brand&id=' . $brandId);
            break;

        case 'upload_excel':
            $brandId = (int) ($_POST['brand_id'] ?? 0);
            if (!$brandId || !isset($_FILES['excel']) || $_FILES['excel']['error'] !== UPLOAD_ERR_OK) {
                flash('Marka secin ve Excel dosyasi yukleyin.', 'error');
                redirect('?page=upload-excel');
                break;
            }

            $downloader = new ImageDownloader($config);
            $importer = new ExcelImport($downloader);
            $result = $importer->import($pdo, $_FILES['excel']['tmp_name'], $brandId);

            $message = "{$result['success']} baslik islendi.";
            if ($result['failed'] > 0) {
                $message .= " {$result['failed']} baslik hata ile atlandi.";
            }
            if (!empty($result['errors'])) {
                $message .= "\nDetaylar: " . implode('; ', array_slice($result['errors'], 0, 10));
            }
            flash($message, $result['failed'] > 0 ? 'warning' : 'success');
            redirect('?page=brand&id=' . $brandId);
            break;

        case 'delete_item':
            $itemId  = (int) ($_POST['item_id'] ?? 0);
            $brandId = (int) ($_POST['brand_id'] ?? 0);
            if ($itemId) {
                Database::deleteItem($pdo, $itemId);
                flash('Baslik silindi.');
            }
            redirect('?page=brand&id=' . $brandId);
            break;
    }

    exit;
}

// ── Handle download actions (GET) ───────────────────────────────────────────
if ($action === 'download_zip') {
    $brandId = (int) ($_GET['brand_id'] ?? 0);
    if (!$brandId) { http_response_code(400); echo 'brand_id gerekli.'; exit; }
    $zipExport = new ZipExport($storagePath);
    $zipExport->streamDownload($pdo, $brandId);
    exit;
}

if ($action === 'download_excel') {
    $brandId = (int) ($_GET['brand_id'] ?? 0);
    if (!$brandId) { http_response_code(400); echo 'brand_id gerekli.'; exit; }

    $exporter = new ExcelExport($appUrl);
    $tmpFile = $exporter->export($pdo, $brandId);

    $brand = Database::getBrand($pdo, $brandId);
    $filename = preg_replace('/[^a-z0-9-]/i', '-', $brand['name'] ?? 'export') . '-links.xlsx';

    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    header('Content-Length: ' . filesize($tmpFile));
    readfile($tmpFile);
    @unlink($tmpFile);
    exit;
}

// ── Views ───────────────────────────────────────────────────────────────────
$brands = Database::getAllBrands($pdo);

ob_start();

switch ($page) {
    case 'brand':
        $brandId = (int) ($_GET['id'] ?? 0);
        $brand = Database::getBrand($pdo, $brandId);
        if (!$brand) { redirect('?page=home'); }
        $items = Database::getItemsByBrand($pdo, $brandId);
        $imageCount = Database::countImagesByBrand($pdo, $brandId);
        $itemCount = Database::countItemsByBrand($pdo, $brandId);
        renderBrandPage($brand, $items, $imageCount, $itemCount, $appUrl);
        break;

    case 'upload':
        renderUploadPage($brands);
        break;

    case 'upload-excel':
        renderUploadExcelPage($brands);
        break;

    default:
        renderHomePage($brands, $pdo);
        break;
}

$content = ob_get_clean();
renderLayout($content, $page, $msg, $brands);

// ═══════════════════════════════════════════════════════════════════════════
//  VIEW FUNCTIONS
// ═══════════════════════════════════════════════════════════════════════════

function renderLayout(string $content, string $page, ?array $flash, array $brands): void
{
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>imageio - Gorsel Yonetim Sistemi</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <a href="?page=home" class="logo">imageio</a>
            <div class="nav-links">
                <a href="?page=home" class="<?= $page === 'home' ? 'active' : '' ?>">Ana Sayfa</a>
                <a href="?page=upload" class="<?= $page === 'upload' ? 'active' : '' ?>">Tek Yukle</a>
                <a href="?page=upload-excel" class="<?= $page === 'upload-excel' ? 'active' : '' ?>">Excel Yukle</a>
            </div>
        </div>
    </nav>

    <main class="container">
        <?php if ($flash): ?>
            <div class="alert alert-<?= e($flash['type']) ?>">
                <?= nl2br(e($flash['message'])) ?>
            </div>
        <?php endif; ?>

        <?= $content ?>
    </main>

    <footer class="footer">
        <div class="container">
            <p>imageio &copy; <?= date('Y') ?></p>
        </div>
    </footer>
</body>
</html>
<?php
}

function renderHomePage(array $brands, \PDO $pdo): void
{
?>
    <div class="page-header">
        <h1>Markalar ve Kategoriler</h1>
    </div>

    <!-- Create new brand/category -->
    <div class="card">
        <h2>Yeni Marka / Kategori Ekle</h2>
        <form method="POST" class="form-inline">
            <input type="hidden" name="action" value="create_brand">
            <div class="form-group">
                <input type="text" name="name" placeholder="Isim" required class="input">
            </div>
            <div class="form-group">
                <select name="type" class="input">
                    <option value="brand">Marka</option>
                    <option value="category">Kategori</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Ekle</button>
        </form>
    </div>

    <!-- List brands -->
    <?php if (empty($brands)): ?>
        <div class="card">
            <p class="text-muted">Henuz marka veya kategori eklenmemis.</p>
        </div>
    <?php else: ?>
        <div class="grid">
            <?php foreach ($brands as $brand): ?>
                <?php
                    $itemCount = Database::countItemsByBrand($pdo, $brand['id']);
                    $imgCount = Database::countImagesByBrand($pdo, $brand['id']);
                ?>
                <div class="card brand-card">
                    <div class="brand-card-header">
                        <span class="badge badge-<?= $brand['type'] === 'brand' ? 'brand' : 'category' ?>">
                            <?= $brand['type'] === 'brand' ? 'Marka' : 'Kategori' ?>
                        </span>
                        <h3><a href="?page=brand&id=<?= $brand['id'] ?>"><?= e($brand['name']) ?></a></h3>
                    </div>
                    <div class="brand-card-stats">
                        <span><?= $itemCount ?> baslik</span>
                        <span><?= $imgCount ?> gorsel</span>
                    </div>
                    <div class="brand-card-actions">
                        <a href="?page=brand&id=<?= $brand['id'] ?>" class="btn btn-sm">Detay</a>
                        <a href="?action=download_zip&brand_id=<?= $brand['id'] ?>" class="btn btn-sm btn-secondary">ZIP Indir</a>
                        <a href="?action=download_excel&brand_id=<?= $brand['id'] ?>" class="btn btn-sm btn-secondary">Excel Indir</a>
                        <form method="POST" class="inline-form" onsubmit="return confirm('Bu markayi ve tum gorsellerini silmek istediginizden emin misiniz?')">
                            <input type="hidden" name="action" value="delete_brand">
                            <input type="hidden" name="brand_id" value="<?= $brand['id'] ?>">
                            <button type="submit" class="btn btn-sm btn-danger">Sil</button>
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
<?php
}

function renderBrandPage(array $brand, array $items, int $imageCount, int $itemCount, string $appUrl): void
{
?>
    <div class="page-header">
        <div>
            <a href="?page=home" class="back-link">&larr; Ana Sayfa</a>
            <h1>
                <?= e($brand['name']) ?>
                <span class="badge badge-<?= $brand['type'] === 'brand' ? 'brand' : 'category' ?>">
                    <?= $brand['type'] === 'brand' ? 'Marka' : 'Kategori' ?>
                </span>
            </h1>
            <p class="text-muted"><?= $itemCount ?> baslik, <?= $imageCount ?> gorsel</p>
        </div>
        <div class="page-header-actions">
            <a href="?page=upload&brand_id=<?= $brand['id'] ?>" class="btn btn-primary">Tek Yukle</a>
            <a href="?page=upload-excel&brand_id=<?= $brand['id'] ?>" class="btn btn-primary">Excel Yukle</a>
            <a href="?action=download_zip&brand_id=<?= $brand['id'] ?>" class="btn btn-secondary">ZIP Indir</a>
            <a href="?action=download_excel&brand_id=<?= $brand['id'] ?>" class="btn btn-secondary">Excel Indir</a>
        </div>
    </div>

    <?php if (empty($items)): ?>
        <div class="card">
            <p class="text-muted">Bu marka/kategoride henuz gorsel yok.</p>
        </div>
    <?php else: ?>
        <div class="items-list">
            <?php foreach ($items as $item): ?>
                <div class="card item-card">
                    <div class="item-header">
                        <h3><?= e($item['title']) ?></h3>
                        <form method="POST" class="inline-form" onsubmit="return confirm('Bu basligi silmek istediginizden emin misiniz?')">
                            <input type="hidden" name="action" value="delete_item">
                            <input type="hidden" name="item_id" value="<?= $item['id'] ?>">
                            <input type="hidden" name="brand_id" value="<?= $brand['id'] ?>">
                            <button type="submit" class="btn btn-sm btn-danger">Sil</button>
                        </form>
                    </div>
                    <?php if (!empty($item['images'])): ?>
                        <div class="image-grid">
                            <?php foreach ($item['images'] as $img): ?>
                                <?php if ($img['status'] === 'downloaded' && !empty($img['storage_path'])): ?>
                                    <div class="image-thumb">
                                        <a href="?page=storage&file=<?= urlencode($img['storage_path']) ?>" target="_blank">
                                            <img src="?page=storage&file=<?= urlencode($img['storage_path']) ?>"
                                                 alt="<?= e($img['public_filename'] ?? '') ?>"
                                                 loading="lazy">
                                        </a>
                                        <div class="image-info">
                                            <small class="image-filename" title="<?= e($img['public_filename'] ?? '') ?>">
                                                <?= e($img['public_filename'] ?? '') ?>
                                            </small>
                                            <a href="?page=storage&file=<?= urlencode($img['storage_path']) ?>"
                                               class="btn btn-xs" download="<?= e($img['public_filename'] ?? '') ?>">Indir</a>
                                        </div>
                                    </div>
                                <?php elseif ($img['status'] === 'failed'): ?>
                                    <div class="image-thumb image-failed">
                                        <span class="failed-icon">!</span>
                                        <small>Indirilemedi</small>
                                    </div>
                                <?php elseif ($img['status'] === 'pending'): ?>
                                    <div class="image-thumb image-pending">
                                        <small>Bekliyor...</small>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    <?php else: ?>
                        <p class="text-muted">Gorsel yok.</p>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
<?php
}

function renderUploadPage(array $brands): void
{
    $preselect = (int) ($_GET['brand_id'] ?? 0);
?>
    <div class="page-header">
        <h1>Tek Gorsel Yukle</h1>
    </div>

    <?php if (empty($brands)): ?>
        <div class="card">
            <p>Once bir <a href="?page=home">marka veya kategori</a> olusturun.</p>
        </div>
    <?php else: ?>
        <div class="card">
            <form method="POST" enctype="multipart/form-data">
                <input type="hidden" name="action" value="upload_single">

                <div class="form-group">
                    <label for="brand_id">Marka / Kategori</label>
                    <select name="brand_id" id="brand_id" class="input" required>
                        <option value="">Secin...</option>
                        <?php foreach ($brands as $b): ?>
                            <option value="<?= $b['id'] ?>" <?= $b['id'] === $preselect ? 'selected' : '' ?>>
                                <?= e($b['name']) ?> (<?= $b['type'] === 'brand' ? 'Marka' : 'Kategori' ?>)
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="title">Baslik</label>
                    <input type="text" name="title" id="title" class="input" required
                           placeholder="Ornegin: Vitra Origin 1F Handdoucheset Mat Zwart">
                </div>

                <?php for ($i = 1; $i <= 5; $i++): ?>
                    <div class="form-group">
                        <label for="image_<?= $i ?>">Gorsel <?= $i ?> <?= $i === 1 ? '(zorunlu)' : '(opsiyonel)' ?></label>
                        <input type="file" name="image_<?= $i ?>" id="image_<?= $i ?>" class="input-file"
                               accept="image/*" <?= $i === 1 ? 'required' : '' ?>>
                    </div>
                <?php endfor; ?>

                <button type="submit" class="btn btn-primary btn-lg">Yukle</button>
            </form>
        </div>
    <?php endif; ?>
<?php
}

function renderUploadExcelPage(array $brands): void
{
    $preselect = (int) ($_GET['brand_id'] ?? 0);
?>
    <div class="page-header">
        <h1>Excel ile Toplu Yukle</h1>
    </div>

    <?php if (empty($brands)): ?>
        <div class="card">
            <p>Once bir <a href="?page=home">marka veya kategori</a> olusturun.</p>
        </div>
    <?php else: ?>
        <div class="card">
            <div class="info-box">
                <h3>Excel Format Bilgisi</h3>
                <p>Excel dosyaniz asagidaki sutunlara sahip olmali:</p>
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>A - Baslik</th>
                            <th>B - Gorsel-1 (URL)</th>
                            <th>C - Gorsel-2 (URL)</th>
                            <th>D - Gorsel-3 (URL)</th>
                            <th>E - Gorsel-4 (URL)</th>
                            <th>F - Gorsel-5 (URL)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Urun Adi</td>
                            <td>https://ornek.com/img1.jpg</td>
                            <td>https://ornek.com/img2.jpg</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <p class="text-muted">Ilk satir baslik satiri olarak atlanir. Gorsel linkleri otomatik indirilir.</p>
            </div>

            <form method="POST" enctype="multipart/form-data">
                <input type="hidden" name="action" value="upload_excel">

                <div class="form-group">
                    <label for="brand_id">Marka / Kategori</label>
                    <select name="brand_id" id="brand_id" class="input" required>
                        <option value="">Secin...</option>
                        <?php foreach ($brands as $b): ?>
                            <option value="<?= $b['id'] ?>" <?= $b['id'] === $preselect ? 'selected' : '' ?>>
                                <?= e($b['name']) ?> (<?= $b['type'] === 'brand' ? 'Marka' : 'Kategori' ?>)
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="excel">Excel Dosyasi (.xlsx, .xls)</label>
                    <input type="file" name="excel" id="excel" class="input-file" required
                           accept=".xlsx,.xls,.csv">
                </div>

                <button type="submit" class="btn btn-primary btn-lg">Yukle ve Isle</button>
            </form>
        </div>
    <?php endif; ?>
<?php
}
