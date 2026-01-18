<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // ==========================================
        // SINGLE ADMIN ACCOUNT (AKUN SAKTI)
        // ==========================================
        
        // Kita bikin satu user aja untuk akses Dashboard
        User::create([
            'name'              => 'Sharesa Admin',
            'email'             => 'admin@sharesa.id', // Email Login
            'password'          => Hash::make('password123'), // Password Login
            'role'              => 'admin', // Role kunci buat tembus middleware
            'email_verified_at' => now(),
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);

        // HAPUS ORDER SEEDER LAMA (Karena kita udah bukan toko dimsum)
        // $this->call(OrderSeeder::class); 
    }
}