<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentListItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rent_list_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('rent_list_id');
            $table->unsignedBigInteger('rent_thing_id');
            $table->float('price', 10, 2);
            $table->integer('qty');
            $table->float('total', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rent_list_items');
    }
}
