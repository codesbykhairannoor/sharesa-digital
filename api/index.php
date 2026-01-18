<?php

// 1. Muat Autoload (Naik satu tingkat ke root)
require __DIR__ . '/../vendor/autoload.php';

// 2. Inisialisasi Aplikasi
$app = require_once __DIR__ . '/../bootstrap/app.php';

// 3. Konfigurasi Writable Path untuk Vercel (Penting!)
// Vercel hanya mengizinkan penulisan di folder /tmp
$app->useStoragePath('/tmp/storage');

// Pastikan direktori internal Laravel tersedia di /tmp
$storagePaths = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/bootstrap/cache',
];

foreach ($storagePaths as $path) {
    if (!is_dir($path)) {
        mkdir($path, 0755, true);
    }
}

// 4. Jalankan Kernel
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);