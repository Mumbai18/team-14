<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('execs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unique()->references('id')->on('user');
            $table->string('name');
            $table->string('emailId');
            $table->string('contact');
            $table->string('age');
            $table->string('address');
            $table->integer('assignedTo');
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
        Schema::dropIfExists('execs');
    }
}
