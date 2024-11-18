<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(BarangSeeder::class);
        $this->call(Barang_keluarSeeder::class);
        $this->call(SupplierSeeder::class);
        $this->call(Barang_masukSeeder::class);
        $this->call(pinjam_barangSeeder::class);
    }
}
