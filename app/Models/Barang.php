<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $fillable = ['id_barang', 'nama_barang', 'spesifikasi', 'lokasi', 'kondisi', 'sumber_dana'];
    protected $primaryKey = 'id_barang';

    // Jika primary key bukan integer atau auto-increment
    public $incrementing = false;
    protected $keyType = 'string';

    // Nonaktifkan timestamps jika tabel tidak memiliki kolom created_at dan updated_at
    public $timestamps = false;

    public function barangMasuk()
    {
        return $this->hasMany(barang_masuk::class, 'id_barang', 'id_barang');
    }

    public function barangKeluar()
    {
        return $this->hasMany(barang_keluar::class, 'id_barang', 'id_barang');
    }

    public function barangPinjam()
    {
        // Pastikan model BarangPinjam ada
        return $this->hasMany(barang_pinjam::class, 'id_barang', 'id_barang');
    }
}
