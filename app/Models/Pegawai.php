<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawai'; // Nama tabel di database

    protected $primaryKey = 'id_pegawai'; // Nama primary key

    public $incrementing = true; // Apakah primary key auto increment
    public $timestamps = true; // Apakah timestamps (created_at dan updated_at) digunakan

    protected $fillable = [
        'id_pegawai',
        'nama_pegawai',
        'alamat',
        'jenis_kelamin',
        'jabatan',
        'status'
    ];

    // Jika ada relasi dengan model lain, bisa didefinisikan di sini
}
