<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_produk',
        'stok',
        'berat',
        'harga',
        'kondisi',
        '_token', // Menambahkan _token ke dalam fillable properties
    ];
}
