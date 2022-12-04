<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WishlistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rent')->insert([
            'user_email' => 'gleason@email.com',
            'book_isbn' => '978-602-8519-93-9'
        ]);

        DB::table('rent')->insert([
            'user_email' => 'angela@email.com',
            'book_isbn' => '978-623-2443-52-5'
        ]);

        DB::table('rent')->insert([
            'user_email' => 'zelmak@email.com',
            'book_isbn' => '978-979-2798-47-3'
        ]);
    }
}
