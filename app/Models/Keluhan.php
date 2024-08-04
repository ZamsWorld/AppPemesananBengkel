<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluhan extends Model
{
    use HasFactory;

    protected $table = 'keluhan'; // Nama tabel di database

    protected $primaryKey = 'id_keluhan'; // Nama primary key

    public $incrementing = true; // Apakah primary key auto increment
    public $timestamps = true; // Apakah timestamps (created_at dan updated_at) digunakan

    protected $fillable = [
        'id_keluhan',
        'nama_keluhan',
        'ongkos',
        'no_pol',
        'customer_id',
        'id_pegawai'
    ];

    // Jika ada relasi dengan model lain, bisa didefinisikan di sini
}
