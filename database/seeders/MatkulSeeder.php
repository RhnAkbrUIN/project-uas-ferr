<?php

namespace Database\Seeders;

use App\Models\Matakuliah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $matkul = [
            [
                'code_matkul' => 'TI00'. mt_rand(00000,999999),
                'matkul' => 'Dasar-dasar Pemrograman',
                'sks' => 3,
            ],
            [
                'code_matkul' => 'TI00'. mt_rand(00000,999999),
                'matkul' => 'Rekayasa Perangkat Lunak',
                'sks' => 2,
            ],
            [
                'code_matkul' => 'TI00'. mt_rand(00000,999999),
                'matkul' => 'Sistem Operasi Lanjutan',
                'sks' => 4,
            ],
            [
                'code_matkul' => 'TI00'. mt_rand(00000,999999),
                'matkul' => 'Kalkulus 1',
                'sks' => 3,
            ],
            [
                'code_matkul' => 'TI00'. mt_rand(00000,999999),
                'matkul' => 'Etika Profesi dan Teknologi Informasi',
                'sks' => 1,
            ],
        ];

        foreach($matkul as $key => $var){
            Matakuliah::create($var);
        }
    }
}
