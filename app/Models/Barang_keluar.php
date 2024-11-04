<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang_keluar extends Model
{
    protected $table = 'barang_keluar';
    protected $fillable = ['id_barang_keluar', 'id_barang', 'tgl_keluar', 'jml_keluar', 'penerima'];
}
