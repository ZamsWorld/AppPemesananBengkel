<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    protected $table = 'kendaraan';
    protected $primaryKey = 'no_pol';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['no_pol', 'no_mesin', 'merek', 'warna'];
}
