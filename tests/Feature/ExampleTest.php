<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Portfolio;

class ExampleTest extends TestCase
{
    use RefreshDatabase; // Ini akan membuat database sementara saat test berjalan

    public function test_the_application_returns_a_successful_response(): void
    {
        // Buat data dummy agar @forelse di home.blade.php tidak error/kosong secara teknis
        Portfolio::create([
            'title' => 'Test Project',
            'slug' => 'test-project',
            'category' => 'Web Development',
            'image' => 'test.jpg',
            'description' => 'Test description'
        ]);

        $response = $this->get('/');

        $response->assertStatus(200);
    }
}