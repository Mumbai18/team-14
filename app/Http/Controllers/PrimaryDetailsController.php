<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimaryDetailsController extends Controller
{
    //
    
   public function enterPrimaryDetails(Request $request)
    {
    	$student = new Student;
    	Schema::create('chatrooms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sender_id');
            //$table->integer('user_id')->references('id')->on('users');
            //$table->string('momProfession')->nullable();
            //$table->integer('momSal')->nullable();
            $table->string('msg')->nullable();
            //$table->integer('dadSal')->nullable();
            
            $table->timestamps();
        });
    }


}
