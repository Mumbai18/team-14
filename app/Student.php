<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $table = 'students';
	protected $fillable = ['firstName','lastName','emailId','mobileNo','landline','age','dob','gender','class','stream','major','caste','currentAddress','pincode','city','state','fatherName','fatherContact','fatherEmailId','fatherQualification','fatherOfficeAddress','motherName','motherContact','motherEmailId','motherQualification','motherOfficeAddress','totalFamilyIncome','totalNoOfMembers','totalBurden','educonID','period','amountRequired','score'];
}
