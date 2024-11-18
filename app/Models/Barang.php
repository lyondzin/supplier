<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $table = 'barang';
    protected $fillable = ['id_barang', 'nama_barang', 'spesifikasi', 'lokasi', 'kondisi', 'sumber_dana'];
    protected $primaryKey = 'id_barang';
}
