<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'น้ำดื่มเนสเล่',
            'price' => 8,
            'image' => '/storage/images/products/_nestle.jpeg',
            'created_at' => date('Y-m-d g:i:s'),
            'updated_at' => date('Y-m-d g:i:s'),
        ]);

        DB::table('products')->insert([
            'name' => 'น้ำผลไม้',
            'price' => 30,
            'image' => '/storage/images/products/_juice.png',
            'created_at' => date('Y-m-d g:i:s'),
            'updated_at' => date('Y-m-d g:i:s'),
        ]);

        DB::table('products')->insert([
            'name' => 'เลย์',
            'price' => 20,
            'image' => '/storage/images/products/_lays.jpg',
            'created_at' => date('Y-m-d g:i:s'),
            'updated_at' => date('Y-m-d g:i:s'),
        ]);
    }
}
