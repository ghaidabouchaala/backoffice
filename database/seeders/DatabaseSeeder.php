<?php

namespace Database\Seeders;

use Database\Seeders\DB;
use Illuminate\Database\Seeder;
use Database\Seeders\AddressSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AddressSeeder::class
        ]);
    }
}
