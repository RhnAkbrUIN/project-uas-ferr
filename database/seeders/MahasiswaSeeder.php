<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mahasiswa = [
            [
                'nim' => '11210900'. mt_rand(000,999),
                'name_mhs' => 'Muhammad Raihan Akbar',
                'jk' => 'Laki-laki',
                'kelas' => 'C',
                'semester' => '5',
                'angkatan' => '2021',
            ],
            [
                'nim' => '11210900'. mt_rand(000,999),
                'name_mhs' => 'Rio Tegar Syahputra',
                'jk' => 'Laki-laki',
                'kelas' => 'C',
                'semester' => '5',
                'angkatan' => '2021',
            ],
            [
                'nim' => '11210900'. mt_rand(000,999),
                'name_mhs' => 'Muhammad Fikri Fahreza',
                'jk' => 'Laki-laki',
                'kelas' => 'C',
                'semester' => '5',
                'angkatan' => '2021',
            ],
            [
                'nim' => '11210900'. mt_rand(000,999),
                'name_mhs' => 'Evan Dick Briantoro',
                'jk' => 'Laki-laki',
                'kelas' => 'C',
                'semester' => '5',
                'angkatan' => '2021',
            ],
        ];

        foreach($mahasiswa as $key => $var){
            Mahasiswa::create($var);
        }
    }
}
