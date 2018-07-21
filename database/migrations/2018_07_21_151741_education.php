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
            $table->integer('ssc')->nullable();
            $table->integer('hsc')->nullable();
            $table->string('dadHighestQualification');
            $table->string('momHighestQualification');
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
        Schema::drop('education');
    }
}