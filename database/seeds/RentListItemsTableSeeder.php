<?php

use Illuminate\Database\Seeder;

class RentListItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rent_list_items')->insert([
            'rent_list_id' => 1,
            'rent_thing_id' => 1,
            'price' => 200,
            'qty' => 1,
            'total' => 200,
            'created_at' => date('Y-m-d g:i:s'),
            'updated_at' => date('Y-m-d g:i:s'),
        ]);

        DB::table('rent_list_items')->insert([
            'rent_list_id' => 1,
            'rent_thing_id' => 2,
            'price' => 300,
            'qty' => 2,
            'total' => 600,
            'created_at' => date('Y-m-d g:i:s'),
            'updated_at' => date('Y-m-d g:i:s'),
        ]);
    }
}
