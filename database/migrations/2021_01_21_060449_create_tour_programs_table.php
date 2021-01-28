<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_programs', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('tour_id')->unsigned();
            $table->foreign('tour_id')->references('id')->on('tours')->onDelete('cascade');

            $table->integer('place_id')->unsigned();
            $table->foreign('place_id')->references('id')->on('places')->onDelete('cascade');

            $table->date('visit_date')->nullable();

            $table->tinyInteger('status')->default(1);

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
        Schema::dropIfExists('tour_programs');
    }
}
