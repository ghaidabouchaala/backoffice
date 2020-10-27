<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use App\Models\Address;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('address')->insert([
            'country' =>'Tunisia',
            'city' => 'Sfax',
        ]);
        DB::table('address')->insert([
            'country' =>'Tunisia',
            'city' => 'Tunis',
        ]);
        DB::table('address')->insert([
            'country' =>'Tunisia',
            'city' => 'Sousse',
        ]);
        DB::table('address')->insert([
            'country' =>'Tunisia',
            'city' => 'Sfax',
        ]);
        DB::table('address')->insert([
            'country' =>'Tunisia',
            'city' => 'Monastir',
        ]);
        DB::table('address')->insert([
            'country' =>'Tunisia',
            'city' => 'Nabeul',
        ]);
        DB::table('address')->insert([
            'country' =>'Tunisia',
            'city' => 'Ariena',
        ]);
    }
}
