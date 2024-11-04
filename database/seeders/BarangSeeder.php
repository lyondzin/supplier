<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('barang')->insert([
            [
                'nama_barang' => 'bembeng', 
                'spesifikasi' => 'bagus bet enak', 
                'lokasi' => 'jakarta', 
                'kondisi' => 'Baik', 
                'sumber_dana' => 'kenalan'
            ],
            [
                'nama_barang' => 'aqua', 
                'spesifikasi' => 'segar', 
                'lokasi' => 'cengkareng', 
                'kondisi' => 'Baik', 
                'sumber_dana' => 'batu'
            ],
            [
                'nama_barang' => 'yupi', 
                'spesifikasi' => 'manis', 
                'lokasi' => 'bogor', 
                'kondisi' => 'Baik', 
                'sumber_dana' => 'gula'
            ],
        ]);
    }
}
