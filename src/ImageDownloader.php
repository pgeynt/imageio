<?php

namespace App;

use GuzzleHttp\Client;
use PDO;

class ImageDownloader
{
    private Client $client;
    private string $storagePath;
    private int $timeout;
    private int $maxFileSize;

    public function __construct(array $config)
    {
        $this->storagePath = $config['storage_path'];
        $this->timeout = $config['download_timeout'] ?? 30;
        $this->maxFileSize = $config['max_file_size'] ?? 20 * 1024 * 1024;
        $this->client = new Client([
            'timeout' => $this->timeout,
            'verify'  => false,
            'headers' => [
                'User-Agent' => 'imageio/1.0',
            ],
        ]);
    }

    /**
     * Download image from URL and save to storage.
     * Returns [storagePath, publicFilename] on success, null on failure.
     */
    public function download(string $url, int $brandId, int $itemId): ?array
    {
        try {
            $response = $this->client->get($url, [
                'stream' => true,
            ]);

            $body = $response->getBody();
            $contentType = $response->getHeaderLine('Content-Type');

            // Determine filename from URL
            $publicFilename = $this->generateFilename($url, $contentType);

            // Create directory
            $dir = $this->storagePath . '/' . $brandId . '/' . $itemId;
            if (!is_dir($dir)) {
                mkdir($dir, 0775, true);
            }

            // Resolve unique filename
            $publicFilename = $this->resolveUnique($dir, $publicFilename);
            $fullPath = $dir . '/' . $publicFilename;

            // Download with size limit
            $fp = fopen($fullPath, 'wb');
            if (!$fp) {
                return null;
            }

            $downloaded = 0;
            while (!$body->eof()) {
                $chunk = $body->read(8192);
                $downloaded += strlen($chunk);
                if ($downloaded > $this->maxFileSize) {
                    fclose($fp);
                    @unlink($fullPath);
                    return null;
                }
                fwrite($fp, $chunk);
            }
            fclose($fp);

            $relativePath = $brandId . '/' . $itemId . '/' . $publicFilename;

            return [$relativePath, $publicFilename];
        } catch (\Exception $e) {
            Logger::error("ImageDownloader error for {$url}: " . $e->getMessage());
            return null;
        }
    }

    /**
     * Download image from URL, save, and update DB record.
     */
    public function downloadAndSave(PDO $pdo, int $imageId, string $url, int $brandId, int $itemId): bool
    {
        $result = $this->download($url, $brandId, $itemId);
        if ($result) {
            [$storagePath, $publicFilename] = $result;
            Database::updateImageDownloaded($pdo, $imageId, $storagePath, $publicFilename);
            return true;
        } else {
            Database::updateImageFailed($pdo, $imageId);
            return false;
        }
    }

    /**
     * Save an uploaded file to storage.
     * Returns [storagePath, publicFilename] on success, null on failure.
     */
    public function saveUploadedFile(array $file, int $brandId, int $itemId): ?array
    {
        if ($file['error'] !== UPLOAD_ERR_OK || $file['size'] > $this->maxFileSize) {
            return null;
        }

        $originalName = basename($file['name']);
        $publicFilename = $this->sanitizeFilename($originalName);

        $dir = $this->storagePath . '/' . $brandId . '/' . $itemId;
        if (!is_dir($dir)) {
            mkdir($dir, 0775, true);
        }

        $publicFilename = $this->resolveUnique($dir, $publicFilename);
        $fullPath = $dir . '/' . $publicFilename;

        if (!move_uploaded_file($file['tmp_name'], $fullPath)) {
            return null;
        }

        $relativePath = $brandId . '/' . $itemId . '/' . $publicFilename;
        return [$relativePath, $publicFilename];
    }

    private function generateFilename(string $url, string $contentType = ''): string
    {
        // Parse URL path to get filename
        $parsed = parse_url($url);
        $path = $parsed['path'] ?? '';
        $basename = basename($path);

        // If no extension, try to determine from content-type
        if ($basename && strpos($basename, '.') !== false) {
            return $this->sanitizeFilename($basename);
        }

        $ext = $this->extensionFromContentType($contentType);
        if ($basename) {
            return $this->sanitizeFilename($basename . '.' . $ext);
        }

        return 'image-' . time() . '-' . mt_rand(1000, 9999) . '.' . $ext;
    }

    private function extensionFromContentType(string $contentType): string
    {
        $map = [
            'image/jpeg'  => 'jpg',
            'image/png'   => 'png',
            'image/gif'   => 'gif',
            'image/webp'  => 'webp',
            'image/svg+xml' => 'svg',
            'image/bmp'   => 'bmp',
            'image/tiff'  => 'tiff',
        ];
        foreach ($map as $mime => $ext) {
            if (str_contains($contentType, $mime)) {
                return $ext;
            }
        }
        return 'jpg';
    }

    private function sanitizeFilename(string $name): string
    {
        // Keep only safe chars: alphanumeric, dash, underscore, dot
        $name = preg_replace('/[^a-zA-Z0-9._-]/', '-', $name);
        // Remove consecutive dashes
        $name = preg_replace('/-+/', '-', $name);
        // Trim dashes from start/end
        $name = trim($name, '-');
        // Limit length
        if (strlen($name) > 200) {
            $ext = pathinfo($name, PATHINFO_EXTENSION);
            $base = substr(pathinfo($name, PATHINFO_FILENAME), 0, 190);
            $name = $ext ? $base . '.' . $ext : $base;
        }
        return $name ?: 'image-' . time() . '.jpg';
    }

    private function resolveUnique(string $dir, string $filename): string
    {
        if (!file_exists($dir . '/' . $filename)) {
            return $filename;
        }

        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $base = pathinfo($filename, PATHINFO_FILENAME);
        $counter = 1;

        do {
            $candidate = $base . '-' . $counter . ($ext ? '.' . $ext : '');
            $counter++;
        } while (file_exists($dir . '/' . $candidate));

        return $candidate;
    }
}
