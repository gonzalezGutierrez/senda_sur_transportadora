<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password');

            $table->integer('rol_id')->unsigned();
            $table->foreign('rol_id')->references('id')->on('rols')->onDelete('cascade');

            $table->tinyInteger('verify_account')->default(0);

            $table->string('fullname')->nullable();
            $table->string('phone',10)->nullable();

            $table->tinyInteger('status')->default(1);

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
