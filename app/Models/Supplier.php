<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $table = 'supplier'; // Nama tabel di database

    protected $primaryKey = 'id_supplier'; // Nama primary key

    public $incrementing = true; // Apakah primary key auto increment
    public $timestamps = true; // Apakah timestamps (created_at dan updated_at) digunakan

    protected $fillable = [
        'nama_supplier', // Menambahkan nama_supplier ke dalam fillable
        'alamat',
        'no_hp',
        'id_barang'
    ];

    // Relasi dengan model `Barang`
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang', 'id_barang');
    }
}
