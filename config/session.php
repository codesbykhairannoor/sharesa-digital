<?php

use Illuminate\Support\Str;

return [

    // Mengambil dari .env, default ke cookie kalau di Vercel
    'driver' => env('SESSION_DRIVER', 'cookie'),

    'lifetime' => env('SESSION_LIFETIME', 120),
    'expire_on_close' => false,

    'encrypt' => false,

    // PERBAIKAN DI SINI: Gunakan storage_path agar fleksibel di Windows/Linux
    'files' => storage_path('framework/sessions'),

    'connection' => env('SESSION_CONNECTION'),
    'table' => 'sessions',
    'store' => env('SESSION_STORE'),
    'lottery' => [2, 100],

    'cookie' => env(
        'SESSION_COOKIE',
        Str::slug(env('APP_NAME', 'laravel'), '_').'_session'
    ),

    'path' => '/',
    'domain' => env('SESSION_DOMAIN'),

    // PERBAIKAN DI SINI: Jangan di-hardcode true! 
    // Di lokal (HTTP) harus false. Di Vercel (HTTPS) otomatis true lewat .env
    'secure' => env('SESSION_SECURE_COOKIE', false),

    'http_only' => true,
    'same_site' => 'lax',
    'partitioned' => false,

];