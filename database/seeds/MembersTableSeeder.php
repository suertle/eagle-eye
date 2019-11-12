<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            'first_name' => 'เจษฎาภรณ์',
            'last_name' => 'ผลดี',
            'email' => 'tik@gmail.com',
            'phone_number' => '0876543210',
            'birthday' => '1977-06-05',
            'personal_id' => '1234567890123',
            'address' => 'โลก',
            'profile_image' => '/storage/images/members/_tik.jpg',
            'created_at' => date('Y-m-d g:i:s'),
            'updated_at' => date('Y-m-d g:i:s'),
        ]);

        DB::table('members')->insert([
            'first_name' => 'ณเดชน์',
            'last_name' => 'คูกิมิยะ',
            'email' => 'nadech@gmail.com',
            'phone_number' => '0812345678',
            'birthday' => '1991-12-17',
            'personal_id' => '1234567890123',
            'address' => 'โลก',
            'profile_image' => '/storage/images/members/_nadech.jpg',
            'created_at' => date('Y-m-d g:i:s'),
            'updated_at' => date('Y-m-d g:i:s'),
        ]);

        DB::table('members')->insert([
            'first_name' => 'ค่อม',
            'last_name' => 'ชวนชื่น',
            'email' => 'arkom@gmail.com',
            'phone_number' => '0800000000',
            'birthday' => '1957-01-01',
            'personal_id' => '1234567890123',
            'address' => 'โลก',
            'profile_image' => '/storage/images/members/_kom.jpg',
            'created_at' => date('Y-m-d g:i:s'),
            'updated_at' => date('Y-m-d g:i:s'),
        ]);
    }
}
