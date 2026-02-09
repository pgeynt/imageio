<?php

return [
    'db' => [
        'host'     => getenv('POSTGRES_HOST') ?: 'localhost',
        'dbname'   => getenv('POSTGRES_DB') ?: 'imageio',
        'user'     => getenv('POSTGRES_USER') ?: 'imageio',
        'password' => getenv('POSTGRES_PASSWORD') ?: 'imageio_secret',
    ],
    'app_url' => rtrim(getenv('APP_URL') ?: 'http://localhost', '/'),
    'storage_path' => __DIR__ . '/storage',
    'max_images_per_item' => 5,
    'download_timeout' => 30,
    'max_file_size' => 20 * 1024 * 1024, // 20MB
];
