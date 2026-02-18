<?php

namespace App;

use PhpOffice\PhpSpreadsheet\IOFactory;
use PDO;

class ExcelImport
{
    private ImageDownloader $downloader;
    private int $maxExcelRows;
    /** @var callable|null (int $done, int $total): void */
    private $progressCallback;

    public function __construct(ImageDownloader $downloader, int $maxExcelRows = 0, ?callable $progressCallback = null)
    {
        $this->downloader = $downloader;
        $this->maxExcelRows = $maxExcelRows;
        $this->progressCallback = $progressCallback;
    }

    /**
     * Import Excel file: each row = title + up to 5 image URLs.
     * Uses row iterator to avoid loading full sheet into memory.
     * Returns ['success' => int, 'failed' => int, 'errors' => string[], 'total' => int]
     */
    public function import(PDO $pdo, string $filePath, int $brandId): array
    {
        $result = ['success' => 0, 'failed' => 0, 'errors' => [], 'total' => 0];

        try {
            $spreadsheet = IOFactory::load($filePath);
            $sheet = $spreadsheet->getActiveSheet();
        } catch (\Exception $e) {
            $result['errors'][] = 'Excel dosyasi okunamadi: ' . $e->getMessage();
            Logger::error('Excel load failed: ' . $e->getMessage(), ['file' => $filePath]);
            return $result;
        }

        $highestRow = $sheet->getHighestDataRow();
        if ($highestRow < 2) {
            $result['errors'][] = 'Excel dosyasi bos veya sadece baslik satiri var.';
            return $result;
        }

        $total = $highestRow - 1; // exclude header
        $totalToProcess = ($this->maxExcelRows <= 0) ? $total : min($total, $this->maxExcelRows);
        $result['total'] = $total;

        if ($this->maxExcelRows > 0 && $total > $this->maxExcelRows) {
            $result['errors'][] = "En fazla {$this->maxExcelRows} satir islenir. " . ($total - $this->maxExcelRows) . " satir atlandi.";
        }

        $done = 0;
        $rowNum = 0;

        if ($this->progressCallback !== null) {
            ($this->progressCallback)(0, $totalToProcess);
        }

        foreach ($sheet->getRowIterator() as $row) {
            $rowNum++;
            if ($rowNum === 1) {
                continue; // header
            }

            if ($rowNum - 1 > $totalToProcess) {
                break; // limit data rows processed
            }

            $cellIterator = $row->getCellIterator();
            $cellIterator->setIterateOnlyExistingCells(false);
            $values = [];
            foreach ($cellIterator as $cell) {
                $values[] = $cell->getValue();
            }

            $title = trim((string) ($values[0] ?? ''));

            if (empty($title)) {
                continue;
            }

            try {
                $itemId = Database::createItem($pdo, $brandId, $title);

                $hasImage = false;
                for ($i = 1; $i <= 5; $i++) {
                    $url = trim((string) ($values[$i] ?? ''));
                    if (empty($url)) {
                        continue;
                    }

                    if (!filter_var($url, FILTER_VALIDATE_URL)) {
                        $result['errors'][] = "Satir {$rowNum}, gorsel-{$i}: Gecersiz URL - {$url}";
                        continue;
                    }

                    $imageId = Database::createImage($pdo, $itemId, $i, $url);

                    $downloaded = $this->downloader->downloadAndSave(
                        $pdo, $imageId, $url, $brandId, $itemId
                    );

                    if ($downloaded) {
                        $hasImage = true;
                    } else {
                        $result['errors'][] = "Satir {$rowNum}, gorsel-{$i}: Indirilemedi - {$url}";
                    }
                }

                $result['success']++;
            } catch (\Exception $e) {
                $result['failed']++;
                $result['errors'][] = "Satir {$rowNum}: Hata - " . $e->getMessage();
                Logger::error("Excel row {$rowNum} failed: " . $e->getMessage(), [
                    'brand_id' => $brandId,
                    'title' => $title ?? '',
                    'trace' => $e->getTraceAsString(),
                ]);
            }

            $done++;

            if ($this->progressCallback !== null) {
                ($this->progressCallback)($done, $totalToProcess);
            }
        }

        return $result;
    }
}
