<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [


            [
                'name' => 'Terror',
                'email' => 'Terror@gmail.com',
                'password' => bcrypt('password123'),
                'role' => 'eventorganizer',
            ],
            [
                'name' => 'Arthas',
                'email' => 'arthas@gmail.com',
                'password' => bcrypt('password123'),
                'role' => 'eventorganizer',
            ],

        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
