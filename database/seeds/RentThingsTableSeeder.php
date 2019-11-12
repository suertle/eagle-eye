<?php

use Illuminate\Database\Seeder;

class RentThingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rent_things')->insert([
            'name' => 'รองเท้า',
            'price' => 200,
            'image' => '/storage/images/rent_things/_shoes.jpeg',
            'created_at' => date('Y-m-d g:i:s'),
            'updated_at' => date('Y-m-d g:i:s'),
        ]);

        DB::table('rent_things')->insert([
            'name' => 'เชือก',
            'price' => 150,
            'image' => '/storage/images/rent_things/_rope.jpeg',
            'created_at' => date('Y-m-d g:i:s'),
            'updated_at' => date('Y-m-d g:i:s'),
        ]);

        DB::table('rent_things')->insert([
            'name' => 'ตะขอ',
            'price' => 40,
            'image' => '/storage/images/rent_things/_carabiner.jpg',
            'created_at' => date('Y-m-d g:i:s'),
            'updated_at' => date('Y-m-d g:i:s'),
        ]);
    }
}
