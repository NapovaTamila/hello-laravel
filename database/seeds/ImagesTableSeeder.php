<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
                [
                    'url' => '/images/laravel-from.png',
                    'filename' => 'public/images/laravel-from.png'
                ],
                [
                    'url' => '/images/laravel-logo.png',
                    'filename' => 'public/images/laravel-logo.png'
                ]
            ]);
    }
}
