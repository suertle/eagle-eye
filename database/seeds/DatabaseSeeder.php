<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AdminsTableSeeder::class,
            CheckinsTableSeeder::class,
            InvoiceItemsTableSeeder::class,
            InvoicesTableSeeder::class,
            MembersTableSeeder::class,
            MemberPlansTableSeeder::class,
            ProductsTableSeeder::class,
            RentThingsTableSeeder::class,
            RentListsTableSeeder::class,
            RentListItemsTableSeeder::class,
        ]);
    }
}
