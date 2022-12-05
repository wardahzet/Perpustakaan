<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RentSeeder extends Seeder
{
    public function run()
    {
        DB::table('rents')->insert([
            'id' => 20221203001,
            'user_email' => 'gleason@email.com',
            'book_isbn' => '978-979-2799-47-3',
            'rent_date' => '2022-11-11 00:00:00',
            'due_date' => '2022-11-18 00:00:00',
            'status' => FALSE
        ]);

        DB::table('rents')->insert([
            'id' => 20221101001,
            'user_email' => 'angela@email.com',
            'book_isbn' => '978-602-0351-17-9',
            'rent_date' => '2022-11-12 00:00:00',
            'due_date' => '2022-11-19 00:00:00',
            'status' => FALSE
        ]);

        DB::table('rents')->insert([
            'id' => 20221101002,
            'user_email' => 'zelmak@email.com',
            'book_isbn' => '978-602-0498-93-5',
            'rent_date' => '2022-11-13 00:00:00',
            'due_date' => '2022-11-20 00:00:00',
            'status' => FALSE
        ]);
        //
    }
}