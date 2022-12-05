<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
        DB::table('users')->insert([
            'email' => 'gleason@email.com',
            'password' => Hash::make('gleasonxx'),
            'name' => 'Robert Gleason',
            'telephone' => 85739206111,
            'address' => 'Jl KH Hasyim Ashari 22A, Kota Malang',
            'is_admin' => FALSE
        ]);

        DB::table('users')->insert([
            'email' => 'angela@email.com',
            'password' => Hash::make('angelaxx'),
            'name' => 'Angela Somerville',
            'telephone' => 85338273459,
            'address' => 'Jl Manyar 69, Kota Malang',
            'is_admin' => FALSE
        ]);

        DB::table('users')->insert([
            'email' => 'zelmak@email.com',
            'password' => Hash::make('zelmakxx'),
            'name' => 'Zelma Kennerson',
            'telephone' => 85236480112,
            'address' => 'Jl Kapuas 21, Kota Malang',
            'is_admin' => FALSE
        ]);

        DB::table('users')->insert([
            'email' => 'adelle@email.com',
            'password' => Hash::make('adellexx'),
            'name' => 'Adelle Williams',
            'telephone' => 85729364019,
            'address' => 'Jl Rawa Binangun VII/7, Kota Malang',
            'is_admin' => TRUE
        ]);

        DB::table('users')->insert([
            'email' => 'admin@email.com',
            'password' => Hash::make('adminamin'),
            'name' => 'amin',
            'telephone' => 87836492763,
            'address' => 'JL. Jend. A. Yani Km.3 No. 104, Kota Malang',
            'is_admin' => TRUE
        ]);
    }
}