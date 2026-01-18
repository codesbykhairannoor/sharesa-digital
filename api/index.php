<?php

// Tampilkan error ke layar (Hanya untuk debug)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Vercel hanya mengizinkan nulis di /tmp
$app->useStoragePath('/tmp/storage');

// Penting: Pastikan folder storage Laravel ada di /tmp
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

// Handler Migrasi "Sakti"
if (isset($_GET['migrate']) && $_GET['migrate'] == 'sharesa') {
    try {
        echo "Memulai migrasi...<br>";
        \Illuminate\Support\Facades\Artisan::call('migrate:fresh', ['--force' => true]);
        echo "Sukses: " . \Illuminate\Support\Facades\Artisan::output();
    } catch (\Exception $e) {
        echo "Gagal Migrasi: " . $e->getMessage();
    }
    exit;
}

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);
$response->send();
$kernel->terminate($request, $response);