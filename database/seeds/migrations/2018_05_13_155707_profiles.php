<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Profiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('user_name');
            $table->foreign('user_name')->references('name')->on('users');
            $table->string('user_lastname');
            $table->foreign('user_lastname')->references('lastname')->on('users');
            $table->string('avatar')->nullable();
            $table->string('subject')->nullable();
            $table->string('education')->nullable();
            $table->string('description')->nullable();
            $table->string('age')->nullable();
            $table->string('school')->nullable();
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
