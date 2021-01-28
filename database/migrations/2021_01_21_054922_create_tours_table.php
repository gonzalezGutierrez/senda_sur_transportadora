<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {

            $table->increments('id');

            $table->string('name');
            $table->string('slug');

            $table->string('banner')->nullable();

            $table->date('start_date');
            $table->date('end_date');

            $table->integer('number_days');
            $table->string('number_days_txt');

            $table->text('small_description')->nullable();
            $table->text('big_description');

            $table->text('available_services');
            $table->text('not_available_services')->nullable();

            $table->text('adicional_information')->nullable();

            $table->double('discount_rate')->nullable();

            $table->integer('min_peoples')->unsigned();

            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

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
        Schema::dropIfExists('tours');
    }
}
