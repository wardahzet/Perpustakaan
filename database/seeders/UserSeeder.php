<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'email' => 'gleason@email.com',
            'password' => 'gleasonxx',
            'name' => 'Robert Gleason',
            'telephone' => 85739206111,
            'address' => 'Jl KH Hasyim Ashari 22A, Kota Malang',
            'is_admin' => FALSE
        ]);

        DB::table('user')->insert([
            'email' => 'angela@email.com',
            'password' => 'angelaxx',
            'name' => 'Angela Somerville',
            'telephone' => 85338273459,
            'address' => 'Jl Manyar 69, Kota Malang',
            'is_admin' => FALSE
        ]);

        DB::table('user')->insert([
            'email' => 'zelmak@email.com',
            'password' => 'zelmakxx',
            'name' => 'Zelma Kennerson',
            'telephone' => 85236480112,
            'address' => 'Jl Kapuas 21, Kota Malang',
            'is_admin' => FALSE
        ]);

        DB::table('user')->insert([
            'email' => 'adelle@email.com',
            'password' => 'adellexx',
            'name' => 'Adelle Williams',
            'telephone' => 85729364019,
            'address' => 'Jl Rawa Binangun VII/7, Kota Malang',
            'is_admin' => TRUE
        ]);

        DB::table('user')->insert([
            'email' => 'natashfitz@email.com',
            'password' => 'natashfitzxx',
            'name' => 'Natasha Fitz',
            'telephone' => 87836492763,
            'address' => 'JL. Jend. A. Yani Km.3 No. 104, Kota Malang',
            'is_admin' => TRUE
        ]);
    }
}
