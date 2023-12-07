<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        // Seed data for mahasiswa
        Mahasiswa::insert([
            [
                'nim' => '112101',
                'name_mhs' => 'Muhammad Raihan Akbar',
                'jk' => 'Laki-laki',
                'kelas' => 'C',
                'semester' => 5,
                'angkatan' => 2021,
            ],
            [
                'nim' => '112102',
                'name_mhs' => 'Rio Tegar Syahputra',
                'jk' => 'Laki-laki',
                'kelas' => 'C',
                'semester' => 5,
                'angkatan' => 2021,
            ],
            [
                'nim' => '112103',
                'name_mhs' => 'Evan Dick Briantoro',
                'jk' => 'Laki-laki',
                'kelas' => 'C',
                'semester' => 5,
                'angkatan' => 2021,
            ],
            [
                'nim' => '112104',
                'name_mhs' => 'Muhammad Fikri Fahreza',
                'jk' => 'Laki-laki',
                'kelas' => 'C',
                'semester' => 5,
                'angkatan' => 2021,
            ],
        ]);

        // Seed data for users
        foreach (Mahasiswa::all() as $mahasiswa) {
            User::create([
                'nim' => $mahasiswa->nim,
                'email' => $mahasiswa->nim . '@example.com',
                'password' => Hash::make('123'),
                'roles' => 'mahasiswa',
            ]);
        }
    }
}
