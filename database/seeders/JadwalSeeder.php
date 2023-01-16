<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jadwal;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jadwal::create([
            'id_ruang' => 1,
            'id_mk' => 1,
            'id_dosen' => 1,
            'kode_jur' => 1,
            'kode_fak' => 1,
            'waktu' => '10:00 - 14:40',
        ]);
        
        Jadwal::create([
            'id_ruang' => 2,
            'id_mk' => 1,
            'id_dosen' => 1,
            'kode_jur' => 1,
            'kode_fak' => 1,
            'waktu' => '13:30 - 15:10',
        ]);
    }
}
