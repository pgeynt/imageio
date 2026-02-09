<?php

namespace App;

use PhpOffice\PhpSpreadsheet\IOFactory;
use PDO;

class ExcelImport
{
    private ImageDownloader $downloader;

    public function __construct(ImageDownloader $downloader)
    {
        $this->downloader = $downloader;
    }

    /**
     * Import Excel file: each row = title + up to 5 image URLs.
     * Expected columns: baslik, gorsel-1, gorsel-2, gorsel-3, gorsel-4, gorsel-5
     * Returns ['success' => int, 'failed' => int, 'errors' => string[]]
     */
    public function import(PDO $pdo, string $filePath, int $brandId): array
    {
        $result = ['success' => 0, 'failed' => 0, 'errors' => []];

        try {
            $spreadsheet = IOFactory::load($filePath);
            $sheet = $spreadsheet->getActiveSheet();
            $rows = $sheet->toArray(null, true, true, true);
        } catch (\Exception $e) {
            $result['errors'][] = 'Excel dosyasi okunamadi: ' . $e->getMessage();
            return $result;
        }

        if (empty($rows)) {
            $result['errors'][] = 'Excel dosyasi bos.';
            return $result;
        }

        // First row is header - skip it
        $isFirst = true;
        $rowNum = 0;

        foreach ($rows as $row) {
            $rowNum++;
            if ($isFirst) {
                $isFirst = false;
                continue;
            }

            // Column A = title, B-F = image URLs (gorsel-1 through gorsel-5)
            $values = array_values($row);
            $title = trim((string) ($values[0] ?? ''));

            if (empty($title)) {
                continue; // Skip empty rows
            }

            try {
                $itemId = Database::createItem($pdo, $brandId, $title);

                $hasImage = false;
                for ($i = 1; $i <= 5; $i++) {
                    $url = trim((string) ($values[$i] ?? ''));
                    if (empty($url)) {
                        continue;
                    }

                    // Validate URL
                    if (!filter_var($url, FILTER_VALIDATE_URL)) {
                        $result['errors'][] = "Satir {$rowNum}, gorsel-{$i}: Gecersiz URL - {$url}";
                        continue;
                    }

                    $imageId = Database::createImage($pdo, $itemId, $i, $url);

                    // Download the image immediately
                    $downloaded = $this->downloader->downloadAndSave(
                        $pdo, $imageId, $url, $brandId, $itemId
                    );

                    if ($downloaded) {
                        $hasImage = true;
                    } else {
                        $result['errors'][] = "Satir {$rowNum}, gorsel-{$i}: Indirilemedi - {$url}";
                    }
                }

                if ($hasImage) {
                    $result['success']++;
                } else {
                    // Item created but no images downloaded - still count
                    $result['success']++;
                }
            } catch (\Exception $e) {
                $result['failed']++;
                $result['errors'][] = "Satir {$rowNum}: Hata - " . $e->getMessage();
            }
        }

        return $result;
    }
}
