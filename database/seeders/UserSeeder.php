<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
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
                'nip' => '20110001001',
                'email' => 'safira@example.com',
                'password' => bcrypt('123'),
                'roles' => 'dosen',
            ],
            [
                'nip' => '20110001002',
                'email' => 'sabrina@example.com',
                'password' => bcrypt('123'),
                'roles' => 'dosen',
            ],
            [
                'nip' => '20110001003',
                'email' => 'aelissa@example.com',
                'password' => bcrypt('123'),
                'roles' => 'dosen',
            ],
            [
                'email' => 'admin@example.com',
                'password' => bcrypt('123'),
                'roles' => 'admin',
            ],
            [
                'nim' => '11210900001',
                'email' => 'raihan@example.com',
                'password' => bcrypt('123'),
                'roles' => 'mahasiswa',
            ],
            [
                'nim' => '11210900002',
                'email' => 'rio@example.com',
                'password' => bcrypt('123'),
                'roles' => 'mahasiswa',
            ],
            [
                'nim' => '11210900003',
                'email' => 'fikri@example.com',
                'password' => bcrypt('123'),
                'roles' => 'mahasiswa',
            ],
            [
                'nim' => '11210900004',
                'email' => 'evan@example.com',
                'password' => bcrypt('123'),
                'roles' => 'mahasiswa',
            ],
        ];

        foreach($user as $key => $var){
            User::create($var);
        }
    }
}
