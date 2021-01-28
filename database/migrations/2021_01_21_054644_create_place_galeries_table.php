<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaceGaleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('place_galeries', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('place_id')->unsigned();
            $table->foreign('place_id')->references('id')->on('places')->onDelete('cascade');

            $table->string('url_image');

            $table->tinyInteger('status')->default(0);

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
        Schema::dropIfExists('place_galeries');
    }
}
