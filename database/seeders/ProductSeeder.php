<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
            'name'=>'One Page Website',
            'price'=>'100',
            'description'=>'A single page website.',
            'category'=>'website',
            'gallery'=>'/img/card.jpg'
            ],
            [
            'name'=>'Three Page Website',
            'price'=>'1200',
            'description'=>'A three page website.',
            'category'=>'website',
            'gallery'=>'/img/card.jpg'
            ]
        ]);
    }
}
