<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');

            $table->string('email')->nullable();
            $table->string('phone');

            $table->date('tour_wish_date');

            $table->text('description')->nullable();

            $table->integer('adult_number')->nullable();
            $table->integer('children_number')->nullable();

            $table->double('assigned_price')->nullable();

            $table->integer('assigned_user_id')->unsigned()->nullable();
            $table->foreign('assigned_user_id')->references('id')->on('users');

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
        Schema::dropIfExists('quotes');
    }
}
