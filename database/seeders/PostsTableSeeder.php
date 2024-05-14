<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['title' => 'Persib Bandung', 'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, veritatis at. Inventore!'],
            ['title' => 'Persija Jakarta', 'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, veritatis at. Inventore!'],
            ['title' => 'Persebaya Surabaya', 'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, veritatis at. Inventore!']
        ];
        // masukkan data ke database
        DB::table('posts')->insert($posts);
    }
}
