<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('orders')->insert([
            [
                'full_name' => 'John Doe',
                'location' => 'Jakarta',
                'phone_number' => '08123456789',
                'email' => 'johndoe@example.com',
                'booking_date' => '2024-12-30',
                'service' => 'event-planner',
                'message' => 'Please prepare a grand event for our company.',
            ],
            [
                'full_name' => 'Jane Smith',
                'location' => 'Bandung',
                'phone_number' => '08987654321',
                'email' => 'janesmith@example.com',
                'booking_date' => '2024-12-15',
                'service' => 'dokumentasi',
                'message' => 'Looking forward to having a professional photographer.',
            ],
        ]);
    }
}
