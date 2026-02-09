<?php

namespace App;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PDO;

class ExcelExport
{
    private string $appUrl;

    public function __construct(string $appUrl)
    {
        $this->appUrl = rtrim($appUrl, '/');
    }

    /**
     * Export items + image public links for a brand as Excel.
     * Columns: Baslik, Gorsel-1, Gorsel-2, Gorsel-3, Gorsel-4, Gorsel-5
     */
    public function export(PDO $pdo, int $brandId): string
    {
        $items = Database::getItemsWithImagesByBrand($pdo, $brandId);
        $brand = Database::getBrand($pdo, $brandId);

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle(mb_substr($brand['name'] ?? 'Export', 0, 31));

        // Header row
        $headers = ['Baslik', 'Gorsel-1', 'Gorsel-2', 'Gorsel-3', 'Gorsel-4', 'Gorsel-5'];
        foreach ($headers as $col => $header) {
            $sheet->setCellValue([$col + 1, 1], $header);
        }

        // Style header
        $headerStyle = $sheet->getStyle('A1:F1');
        $headerStyle->getFont()->setBold(true);

        // Data rows
        $rowNum = 2;
        foreach ($items as $item) {
            $sheet->setCellValue([1, $rowNum], $item['title']);

            foreach ($item['images'] as $img) {
                if ($img['status'] === 'downloaded' && !empty($img['storage_path'])) {
                    $col = (int) $img['position'] + 1; // position 1 = col B (2)
                    $publicLink = $this->appUrl . '/storage/' . $img['storage_path'];
                    $sheet->setCellValue([$col, $rowNum], $publicLink);
                }
            }
            $rowNum++;
        }

        // Auto-size columns
        foreach (range('A', 'F') as $col) {
            $sheet->getColumnDimension($col)->setAutoSize(true);
        }

        // Write to temp file
        $tmpFile = tempnam(sys_get_temp_dir(), 'imageio_export_') . '.xlsx';
        $writer = new Xlsx($spreadsheet);
        $writer->save($tmpFile);

        return $tmpFile;
    }
}
