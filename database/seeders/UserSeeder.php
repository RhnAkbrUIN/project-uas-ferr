<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
            'name' => 'dosen',
            'nim' => 'DOSEN123',
            'email' => 'dosen@example.com',
            'password' => bcrypt('123'),
            'roles' => 'dosen',
            ],
            [
            'name' => 'admin',
            'nim' => 'ADMIN123',
            'email' => 'admin@example.com',
            'password' => bcrypt('123'),
            'roles' => 'admin',
            ],
            [
            'name' => 'mahasiswa',
            'nim' => 'MAHASISWA123',
            'email' => 'mahasiswa@example.com',
            'password' => bcrypt('123'),
            'roles' => 'mahasiswa',
            ],
        ];

        foreach($user as $key => $var){
            User::create($var);
        }
    }
}
