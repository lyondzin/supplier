<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('user')->insert([
            [
                'id_user' => 1,
                'nama' => 'Nathan',
                'username' => 'TGODS',
                'password' => 'ululul',
                'level' =>  5
            ],
            [
                'id_user' => 2,
                'nama' => 'Epan',
                'username' => 'male',
                'password' => 'sigma',
                'level' =>  4
            ],
            [
                'id_user' => 3,
                'nama' => 'penli',
                'username' => 'Rokus',
                'password' => 'notsigma',
                'level' =>  3
            ],
        ]);
    }
}
