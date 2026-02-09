<?php

namespace App;

use PDO;
use PDOException;

class Database
{
    private static ?PDO $instance = null;

    public static function connect(array $config): PDO
    {
        if (self::$instance === null) {
            $dsn = sprintf(
                'pgsql:host=%s;dbname=%s',
                $config['host'],
                $config['dbname']
            );
            self::$instance = new PDO($dsn, $config['user'], $config['password'], [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ]);
        }
        return self::$instance;
    }

    public static function migrate(PDO $pdo): void
    {
        $pdo->exec("
            CREATE TABLE IF NOT EXISTS brands (
                id SERIAL PRIMARY KEY,
                name VARCHAR(255) NOT NULL,
                type VARCHAR(20) NOT NULL DEFAULT 'brand' CHECK (type IN ('brand', 'category')),
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            );

            CREATE TABLE IF NOT EXISTS items (
                id SERIAL PRIMARY KEY,
                brand_id INTEGER NOT NULL REFERENCES brands(id) ON DELETE CASCADE,
                title VARCHAR(500) NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            );

            CREATE TABLE IF NOT EXISTS images (
                id SERIAL PRIMARY KEY,
                item_id INTEGER NOT NULL REFERENCES items(id) ON DELETE CASCADE,
                position SMALLINT NOT NULL CHECK (position BETWEEN 1 AND 5),
                original_url TEXT,
                storage_path TEXT,
                public_filename VARCHAR(500),
                status VARCHAR(20) DEFAULT 'pending' CHECK (status IN ('pending', 'downloaded', 'failed')),
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            );

            CREATE INDEX IF NOT EXISTS idx_items_brand ON items(brand_id);
            CREATE INDEX IF NOT EXISTS idx_images_item ON images(item_id);
        ");
    }

    // ---- Brand helpers ----

    public static function getAllBrands(PDO $pdo): array
    {
        return $pdo->query("SELECT * FROM brands ORDER BY type, name")->fetchAll();
    }

    public static function getBrand(PDO $pdo, int $id): ?array
    {
        $stmt = $pdo->prepare("SELECT * FROM brands WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch() ?: null;
    }

    public static function createBrand(PDO $pdo, string $name, string $type = 'brand'): int
    {
        $stmt = $pdo->prepare("INSERT INTO brands (name, type) VALUES (?, ?) RETURNING id");
        $stmt->execute([$name, $type]);
        return (int) $stmt->fetchColumn();
    }

    public static function deleteBrand(PDO $pdo, int $id): void
    {
        $stmt = $pdo->prepare("DELETE FROM brands WHERE id = ?");
        $stmt->execute([$id]);
    }

    // ---- Item helpers ----

    public static function createItem(PDO $pdo, int $brandId, string $title): int
    {
        $stmt = $pdo->prepare("INSERT INTO items (brand_id, title) VALUES (?, ?) RETURNING id");
        $stmt->execute([$brandId, $title]);
        return (int) $stmt->fetchColumn();
    }

    public static function getItemsByBrand(PDO $pdo, int $brandId): array
    {
        $stmt = $pdo->prepare("
            SELECT i.*, 
                   json_agg(
                       json_build_object(
                           'id', img.id, 
                           'position', img.position,
                           'original_url', img.original_url,
                           'storage_path', img.storage_path,
                           'public_filename', img.public_filename,
                           'status', img.status
                       ) ORDER BY img.position
                   ) FILTER (WHERE img.id IS NOT NULL) as images
            FROM items i
            LEFT JOIN images img ON img.item_id = i.id
            WHERE i.brand_id = ?
            GROUP BY i.id
            ORDER BY i.created_at DESC
        ");
        $stmt->execute([$brandId]);
        $rows = $stmt->fetchAll();
        foreach ($rows as &$row) {
            $row['images'] = $row['images'] ? json_decode($row['images'], true) : [];
        }
        return $rows;
    }

    public static function deleteItem(PDO $pdo, int $id): void
    {
        $stmt = $pdo->prepare("DELETE FROM items WHERE id = ?");
        $stmt->execute([$id]);
    }

    // ---- Image helpers ----

    public static function createImage(PDO $pdo, int $itemId, int $position, ?string $originalUrl = null): int
    {
        $stmt = $pdo->prepare("INSERT INTO images (item_id, position, original_url) VALUES (?, ?, ?) RETURNING id");
        $stmt->execute([$itemId, $position, $originalUrl]);
        return (int) $stmt->fetchColumn();
    }

    public static function updateImageDownloaded(PDO $pdo, int $id, string $storagePath, string $publicFilename): void
    {
        $stmt = $pdo->prepare("UPDATE images SET storage_path = ?, public_filename = ?, status = 'downloaded' WHERE id = ?");
        $stmt->execute([$storagePath, $publicFilename, $id]);
    }

    public static function updateImageFailed(PDO $pdo, int $id): void
    {
        $stmt = $pdo->prepare("UPDATE images SET status = 'failed' WHERE id = ?");
        $stmt->execute([$id]);
    }

    public static function getImagesByBrand(PDO $pdo, int $brandId): array
    {
        $stmt = $pdo->prepare("
            SELECT img.*, i.title as item_title, b.name as brand_name
            FROM images img
            JOIN items i ON i.id = img.item_id
            JOIN brands b ON b.id = i.brand_id
            WHERE i.brand_id = ? AND img.status = 'downloaded'
            ORDER BY i.title, img.position
        ");
        $stmt->execute([$brandId]);
        return $stmt->fetchAll();
    }

    public static function getItemsWithImagesByBrand(PDO $pdo, int $brandId): array
    {
        $stmt = $pdo->prepare("
            SELECT i.id, i.title,
                   json_agg(
                       json_build_object(
                           'position', img.position,
                           'public_filename', img.public_filename,
                           'storage_path', img.storage_path,
                           'status', img.status
                       ) ORDER BY img.position
                   ) FILTER (WHERE img.id IS NOT NULL) as images
            FROM items i
            LEFT JOIN images img ON img.item_id = i.id
            WHERE i.brand_id = ?
            GROUP BY i.id
            ORDER BY i.title
        ");
        $stmt->execute([$brandId]);
        $rows = $stmt->fetchAll();
        foreach ($rows as &$row) {
            $row['images'] = $row['images'] ? json_decode($row['images'], true) : [];
        }
        return $rows;
    }

    public static function countImagesByBrand(PDO $pdo, int $brandId): int
    {
        $stmt = $pdo->prepare("
            SELECT COUNT(*) FROM images img
            JOIN items i ON i.id = img.item_id
            WHERE i.brand_id = ? AND img.status = 'downloaded'
        ");
        $stmt->execute([$brandId]);
        return (int) $stmt->fetchColumn();
    }

    public static function countItemsByBrand(PDO $pdo, int $brandId): int
    {
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM items WHERE brand_id = ?");
        $stmt->execute([$brandId]);
        return (int) $stmt->fetchColumn();
    }
}
