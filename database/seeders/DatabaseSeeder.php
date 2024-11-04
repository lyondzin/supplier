<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            SupplierSeeder::class,
            BarangSeeder::class,
            Barang_MasukSeeder::class,
            Pinjam_BarangSeeder::class,
            Barang_KeluarSeeder::class,
        ]);
    }
}
