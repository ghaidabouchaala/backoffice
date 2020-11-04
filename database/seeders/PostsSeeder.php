<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' =>'Market size',
            'body' => 'Some random post about a startup market size',
            'user_id' => '1'
        ]);
        DB::table('posts')->insert([
            'title' =>'What is Lorem Ipsum?',
            'body' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry standard dummy text ever since the 1500s',
            'user_id' => '2'
        ]);
        DB::table('posts')->insert([
            'title' =>'Why do we use it?',
            'body' => 'It is a long established fact that a reader will be distracted by the readable content
                     of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal',
            'user_id' => '2'
        ]);
    }
}
