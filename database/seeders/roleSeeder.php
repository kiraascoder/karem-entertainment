<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Roles;

class roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Roles::insertOrIgnore([

            [
                'id' => 1,
                'role' => 'user'
            ],
            [
                'id' => 2,
                'role' => 'manager'
            ],
            [
                'id' => 3,
                'role' => 'eventorganizer'
            ],

        ]);
    }
}
