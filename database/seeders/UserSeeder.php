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
            'code' => strtoupper(Str::random(10)),
            'name' => 'dosen',
            'email' => 'dosen@example.com',
            'password' => bcrypt('123'),
            'roles' => 'dosen',
            ],
            [
            'code' => strtoupper(Str::random(10)),
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('123'),
            'roles' => 'admin',
            ],
            [
            'code' => strtoupper(Str::random(10)),
            'name' => 'mahasiswa',
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
