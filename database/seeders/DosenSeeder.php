<?php

namespace Database\Seeders;

use App\Models\Dosen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dosen = [
            [
                'nip' => '20110001001',
                'name_dosen' => 'Safira Anggia Marwan',
                'jk' => 'Perempuan',
                'code_matkul' => 'TI0005',
            ],
            [
                'nip' => '20110001002',
                'name_dosen' => 'Sabrina Erisaputri',
                'jk' => 'Perempuan',
                'code_matkul' => 'TI0001',
            ],
            [
                'nip' => '20110001003',
                'name_dosen' => 'Aelissa Maharani',
                'jk' => 'Perempuan',
                'code_matkul' => 'TI0002',
            ],
        ];

        foreach($dosen as $key => $var){
            Dosen::create($var);
        }
    }
}
