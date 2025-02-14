<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MataKuliah;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MataKuliah::insert([
            [
                'reg_mk' => 'BD',
                'nama_mk' => 'Basis Data',
                'sks' => '3'
            ],
            [
                'reg_mk' => 'PWEB',
                'nama_mk' => 'Pemrograman Web',
                'sks' => '3'
            ],
            [
                'reg_mk' => 'PBD',
                'nama_mk' => 'Perancangan Basis Data',
                'sks' => '4'
            ],
            [
                'reg_mk' => 'PTB',
                'nama_mk' => 'Pemrograman Teknologi Bergerak',
                'sks' => '3'
            ],
            [
                'reg_mk' => 'ISI',
                'nama_mk' => 'Inovasi Sistem Informasi',
                'sks' => '3'
            ],
            [
                'reg_mk' => 'JK',
                'nama_mk' => 'Jaringan dan Komunikasi Data',
                'sks' => '3'
            ]

        ]);


    }
}
