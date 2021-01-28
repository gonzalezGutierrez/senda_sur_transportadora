<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_tours', function (Blueprint $table) {

            $table->increments('id');
            $table->text('question');

            $table->integer('tour_id')->unsigned();
            $table->foreign('tour_id')->references('id')->on('tours')->onDelete('cascade');

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
        Schema::dropIfExists('question_tours');
    }
}
