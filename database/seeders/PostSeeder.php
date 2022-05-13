<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'サンプル1',
            'article' => 'サンプル1',
        ]);
        DB::table('posts')->insert([
            'title' => 'サンプル2',
            'article' => 'サンプル2',
        ]);
        DB::table('posts')->insert([
            'title' => 'サンプル3',
            'article' => 'サンプル3',
        ]);
    }
}
