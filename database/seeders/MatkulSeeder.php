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
            'matkul' => 'Dasar-dasar Pemrograman',
            ],
            [
            'matkul' => 'Rekayasa Perangkat Lunak',
            ],
            [
            'matkul' => 'Sistem Operasi Lanjutan',
            ],
            [
            'matkul' => 'Kalkulus 1',
            ],
            [
            'matkul' => 'Etika Profesi dan Teknologi Informasi',
            ],
        ];

        foreach($matkul as $key => $var){
            Matakuliah::create($var);
        }
    }
}
