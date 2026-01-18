<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Portfolio extends Model
{
    use HasFactory, SoftDeletes;

    // Nama tabel di database (opsional jika sesuai standar, tapi biar yakin aja)
    protected $table = 'portfolios';

    protected $fillable = [
        'title',
        'slug',
        'category',
        'client_name',
        'description',
        'image',
    ];
}