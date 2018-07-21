<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('emailId');
            $table->string('mobileNo');
            $table->string('landline');
            $table->string('age');
            $table->date('dob');
            $table->string('gender');
            $table->string('class');
            $table->string('stream')->nullable();
            $table->string('major')->nullable();
            $table->string('caste');
            $table->string('currentAddress');
            $table->string('pincode');
            $table->string('city');
            $table->string('state');
            $table->string('fatherName');
            $table->string('fatherContact');
            $table->string('fatherEmailId');
            $table->string('fatherQualification')->nullable();
            $table->string('fatherOfficeAddress')->nullable();
            $table->string('motherName')->nullable();
            $table->string('motherContact')->nullable();
            $table->string('motherEmailId')->nullable();
            $table->string('motherQualification')->nullable();
            $table->string('motherOfficeAddress')->nullable();
             $table->string('totalFamilyIncome');
             $table->string('totalNoOfMembers');
             $table->string('totalBurden');
             $table->string('educonID')->nullable();
             $table->integer('status')->default('0');
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
        Schema::dropIfExists('students');
    }
}
