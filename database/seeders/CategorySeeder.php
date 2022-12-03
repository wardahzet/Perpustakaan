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
        $data = [
            [
             'name' => 'Science',
             'icon' => 'xxx'],
            [
             'name' => 'Computer',
             'icon' => 'yyy'],
            ];
        DB::table('categories')->insert($data);
    }
}
