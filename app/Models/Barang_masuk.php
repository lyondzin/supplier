<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang_masuk extends Model
{
    protected $table = 'barang_masuk';
    protected $fillable = ['id_barang_masuk', 'id_barang', 'nama_barang', 'tgl_masuk', 'jml_barang', 'id_supplier'];
}
