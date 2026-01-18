<?php

ini_set('display_errors', 0);
error_reporting(E_ALL);

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

/**
 * IMPORTANT:
 * Vercel cuma ngizinin write di /tmp
 */
$app->useStoragePath('/tmp/storage');

/**
 * Pastikan semua folder penting ada
 */
$paths = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/bootstrap/cache',
];

foreach ($paths as $path) {
    if (!is_dir($path)) {
        mkdir($path, 0755, true);
    }
}

/**
 * Handle request Laravel
 */
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$request = Illuminate\Http\Request::capture();
$response = $kernel->handle($request);

$response->send();
$kernel->terminate($request, $response);
