<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quote_places', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('place_id')->unsigned();
            $table->foreign('place_id')->references('id')->on('places');

            $table->integer('quote_id')->unsigned();
            $table->foreign('quote_id')->references('id')->on('quotes');


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
        Schema::dropIfExists('quote_places');
    }
}
