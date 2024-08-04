<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers'; // Nama tabel di database

    protected $primaryKey = 'customer_id'; // Nama primary key

    public $incrementing = false; // Jika primary key tidak auto increment
    public $timestamps = true; // Apakah timestamps (created_at dan updated_at) digunakan

    protected $fillable = [
        'customer_id',
        'nama_customer',
        'alamat',
        'jenis_kelamin'
    ];

    // Jika ada relasi dengan model lain, bisa didefinisikan di sini
}
