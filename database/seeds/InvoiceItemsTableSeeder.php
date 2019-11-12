<?php

use Illuminate\Database\Seeder;

class InvoiceItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('invoice_items')->insert([
            'invoice_id' => 1,
            'product_id' => 1,
            'price' => 8,
            'qty' => 1,
            'total' => 8,
            'created_at' => date('Y-m-d g:i:s'),
            'updated_at' => date('Y-m-d g:i:s'),
        ]);

        DB::table('invoice_items')->insert([
            'invoice_id' => 1,
            'product_id' => 2,
            'price' => 30,
            'qty' => 2,
            'total' => 60,
            'created_at' => date('Y-m-d g:i:s'),
            'updated_at' => date('Y-m-d g:i:s'),
        ]);
    }
}
