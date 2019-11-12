<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CheckinsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('checkins')->insert([
            'member_id' => 1,
            'created_at' => date('2019-07-25 09:52:54'),
            'updated_at' => date('2019-07-25 09:52:54'),
        ]);

        DB::table('checkins')->insert([
            'member_id' => 2,
            'created_at' => date('Y-m-d g:i:s'),
            'updated_at' => date('Y-m-d g:i:s'),
        ]);
    }
}
