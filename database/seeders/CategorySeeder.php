<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => 1001,
            'name' => 'Computer',
            'icon' => 'https://i.ibb.co/6w74Wc3/Computer.png'
        ]);

        DB::table('categories')->insert([
            'id' => 1002,
            'name' => 'Dictionary',
            'icon' => 'https://i.ibb.co/GWd3yYv/dictionary.png'
        ]);

        DB::table('categories')->insert([
            'id' => 1003,
            'name' => 'Encyclopedia',
            'icon' => 'https://i.ibb.co/PcwPfnM/encyclopedia.png'
        ]);

        DB::table('categories')->insert([
            'id' => 1004,
            'name' => 'Medical',
            'icon' => 'https://i.ibb.co/Xjhzhb4/medical.png'
        ]);

        DB::table('categories')->insert([
            'id' => 1005,
            'name' => 'Music',
            'icon' => 'https://i.ibb.co/zV3Q3pH/music.png'
        ]);

        DB::table('categories')->insert([
            'id' => 1006,
            'name' => 'Fiction',
            'icon' => 'https://i.ibb.co/hMDzRKC/fiction.png'
        ]);

        DB::table('categories')->insert([
            'id' => 1007,
            'name' => 'Anthropology',
            'icon' => 'https://i.ibb.co/Qr4YCmL/anthropology.png'
        ]);

        DB::table('categories')->insert([
            'id' => 1008,
            'name' => 'Science',
            'icon' => 'https://i.ibb.co/VpyysPP/science.png'
        ]);

        DB::table('categories')->insert([
            'id' => 1009,
            'name' => 'Economy',
            'icon' => 'https://i.ibb.co/3MGcGPs/economy.png'
        ]);

        DB::table('categories')->insert([
            'id' => 1010,
            'name' => 'Sociology',
            'icon' => 'https://i.ibb.co/MNcgfYy/sociology.png'
        ]);
    }
}
