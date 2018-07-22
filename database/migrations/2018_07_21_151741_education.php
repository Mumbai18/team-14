<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Education extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('education', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unique()->references('id')->on('users');
            //$table->integer('user_id')->references('id')->on('users');
            $table->timestamps();
            $table->string('owner');
            $table->string('type');
            $table->string('pension');
            $table->string('mincome');
            $table->string('fincome');
            $table->string('sincome');
            $table->string('grant');
            $table->string('tieup');
            $table->string('board');
            $table->string('school');
            $table->string('marks');
            $table->string('bboard');
            $table->string('sschool');
            $table->string('bbboard');
            $table->string('ssschool');
            $table->string('mmmarks');
            $table->string('sports');

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
        Schema::drop('education');
    }
}
