<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberPlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('member_plans')->insert([
            'name' => 'โปรแกรม 1 วัน',
            'days' => 1,
            'child_price' => 180,
            'adult_price' => 280,
            'created_at' => date('Y-m-d g:i:s'),
            'updated_at' => date('Y-m-d g:i:s'),
        ]);

        DB::table('member_plans')->insert([
            'name' => 'โปรแกรม 7 วัน',
            'days' => 7,
            'child_price' => 750,
            'adult_price' => 1000,
            'created_at' => date('Y-m-d g:i:s'),
            'updated_at' => date('Y-m-d g:i:s'),
        ]);

        DB::table('member_plans')->insert([
            'name' => 'โปรแกรม 30 วัน',
            'days' => 30,
            'child_price' => 2400,
            'adult_price' => 3200,
            'created_at' => date('Y-m-d g:i:s'),
            'updated_at' => date('Y-m-d g:i:s'),
        ]);
    }
}
