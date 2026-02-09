<?php

namespace App;

use PDO;
use ZipArchive;

class ZipExport
{
    private string $storagePath;

    public function __construct(string $storagePath)
    {
        $this->storagePath = $storagePath;
    }

    /**
     * Create a ZIP file with all downloaded images for a brand.
     * Files are named by their public_filename.
     * Returns the path to the temporary ZIP file, or null on failure.
     */
    public function export(PDO $pdo, int $brandId): ?string
    {
        $images = Database::getImagesByBrand($pdo, $brandId);

        if (empty($images)) {
            return null;
        }

        $brand = Database::getBrand($pdo, $brandId);
        $brandSlug = $this->slugify($brand['name'] ?? 'export');

        $tmpFile = tempnam(sys_get_temp_dir(), 'imageio_zip_') . '.zip';

        $zip = new ZipArchive();
        if ($zip->open($tmpFile, ZipArchive::CREATE | ZipArchive::OVERWRITE) !== true) {
            return null;
        }

        $addedFiles = [];
        foreach ($images as $img) {
            $filePath = $this->storagePath . '/' . $img['storage_path'];
            if (!file_exists($filePath)) {
                continue;
            }

            // Use public_filename, resolve duplicates in zip
            $zipName = $img['public_filename'] ?? basename($img['storage_path']);
            $zipName = $this->resolveZipDuplicate($addedFiles, $zipName);
            $addedFiles[] = $zipName;

            // Organize by item title folder
            $folderName = $this->slugify($img['item_title'] ?? 'item');
            $zip->addFile($filePath, $folderName . '/' . $zipName);
        }

        $zip->close();

        if (empty($addedFiles)) {
            @unlink($tmpFile);
            return null;
        }

        return $tmpFile;
    }

    /**
     * Stream ZIP download to browser.
     */
    public function streamDownload(PDO $pdo, int $brandId): void
    {
        $zipPath = $this->export($pdo, $brandId);

        if (!$zipPath || !file_exists($zipPath)) {
            http_response_code(404);
            echo 'Indirilecek gorsel bulunamadi.';
            return;
        }

        $brand = Database::getBrand($pdo, $brandId);
        $filename = $this->slugify($brand['name'] ?? 'export') . '-images.zip';

        header('Content-Type: application/zip');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        header('Content-Length: ' . filesize($zipPath));
        header('Cache-Control: no-cache, must-revalidate');

        readfile($zipPath);
        @unlink($zipPath);
        exit;
    }

    private function slugify(string $text): string
    {
        $text = mb_strtolower($text, 'UTF-8');
        $text = preg_replace('/[^a-z0-9]+/', '-', $text);
        $text = trim($text, '-');
        return $text ?: 'export';
    }

    private function resolveZipDuplicate(array $existing, string $name): string
    {
        if (!in_array($name, $existing)) {
            return $name;
        }

        $ext = pathinfo($name, PATHINFO_EXTENSION);
        $base = pathinfo($name, PATHINFO_FILENAME);
        $counter = 1;

        do {
            $candidate = $base . '-' . $counter . ($ext ? '.' . $ext : '');
            $counter++;
        } while (in_array($candidate, $existing));

        return $candidate;
    }
}
