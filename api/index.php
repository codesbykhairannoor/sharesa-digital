<?php

// 1. Aktifkan Error Reporting agar kendala terlihat jelas
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 2. Load Autoload & App Laravel
require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';

// 3. Konfigurasi Writable Path untuk Vercel (Menggunakan /tmp)
$app->useStoragePath('/tmp/storage');

// Pastikan folder framework tersedia di /tmp agar Laravel bisa menulis cache/views
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

// 4. Inisialisasi Kernel
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

// 5. Handler Migrasi "Sakti" (Dijalankan SETELAH Kernel siap)
if (isset($_GET['migrate']) && $_GET['migrate'] == 'sharesa') {
    try {
        echo "<b>Memulai proses migrasi ke Supabase...</b><br>";
        
        // Menjalankan artisan migrate:fresh secara terprogram
        \Illuminate\Support\Facades\Artisan::call('migrate:fresh', ['--force' => true]);
        
        echo "<br>✅ <b>Sukses:</b> Database Sharesa Berhasil Dimigrasi!<br>";
        echo "<pre>" . \Illuminate\Support\Facades\Artisan::output() . "</pre>";
    } catch (\Exception $e) {
        echo "<br>❌ <b>Gagal Migrasi:</b> " . $e->getMessage();
        echo "<br><br><i>Pastikan password database di Vercel Env sudah benar dan driver pgsql sudah ada di config/database.php</i>";
    }
    exit;
}

// 6. Jalankan Aplikasi
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);
$response->send();
$kernel->terminate($request, $response);