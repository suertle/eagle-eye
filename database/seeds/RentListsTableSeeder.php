<?php

use Illuminate\Database\Seeder;

class RentListsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rent_lists')->insert([
            'member_id' => 1,
            'total' => 800,
            'created_at' => date('Y-m-d g:i:s'),
            'updated_at' => date('Y-m-d g:i:s'),
        ]);
    }
}
