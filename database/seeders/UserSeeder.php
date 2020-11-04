<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'firstName' => 'ghaida',
            'lastName' => 'bouchaala',
            'email' => 'ghaida@gmail.com',
            'password' => '$2y$10$4cCCVqJKSIQI14ePvTGa0.j7HDcKpODWlGd/hBgJ60LWtAv1eVNvS',
            'phone' => 53300200,
            'address_id' => 1
        ]);

        DB::table('users')->insert([
            'firstName' => 'omar',
            'lastName' => 'omar',
            'email' => 'omar@gmail.com',
            'password' => '$2y$10$4cCCVqJKSIQI14ePvTGa0.j7HDcKpODWlGd/hBgJ60LWtAv1eVNvS',
            'phone' => 53400200,
            'address_id' => 3
        ]);

    }
}
