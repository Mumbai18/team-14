<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Student;

class PrimaryDetailsRetrievalController extends Controller
{
    //

	public function showDetails()
	{
    	$student_basic_details = Student::where('status','=','0')->get();
    	return view('firstapproval')->with('studentdetails',$student_basic_details);


	}    
}
