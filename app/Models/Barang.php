<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang'; // Nama tabel di database

    protected $primaryKey = 'id_barang'; // Nama primary key

    public $incrementing = true; // Apakah primary key auto increment
    public $timestamps = true; // Apakah timestamps (created_at dan updated_at) digunakan

    protected $fillable = [
        'nama_barang',
        'merek',
        'harga',
        'stok',
        'satuan'
    ];

    // Jika ada relasi dengan model lain, bisa didefinisikan di sini
}
