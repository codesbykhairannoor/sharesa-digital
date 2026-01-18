<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Judul Project
            $table->string('slug')->unique(); // URL ramah SEO
            $table->string('category'); // Web Dev, UI/UX, Branding
            $table->string('client_name')->nullable(); // Nama Klien
            $table->text('description'); // Penjelasan Project
            $table->string('image')->nullable(); // Foto Project
            $table->timestamps();
            $table->softDeletes(); // Biar kalau kehapus bisa direstore
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};