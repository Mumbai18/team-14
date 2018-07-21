<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Finance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('finance', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unique()->references('id')->on('users');
            //$table->integer('user_id')->references('id')->on('users');
            $table->string('momProfession')->nullable();
            $table->integer('momSal')->nullable();
            $table->string('dadProfession')->nullable();
            $table->integer('dadSal')->nullable();
            
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
        //
        Schema::drop('finance');
    }
}
