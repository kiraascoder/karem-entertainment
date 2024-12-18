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
                'name' => 'Manager',
                'email' => 'manager@gmail.com',
                'password' => bcrypt('password123'),
                'role' => 'manager'
            ]

        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
