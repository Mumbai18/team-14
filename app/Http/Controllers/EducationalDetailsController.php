<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EducationalDetailsController extends Controller
{
    //
    public function display(Request $request)
    {
    	$student_basic_details = Student::where('status','=','0')->get();
    	return view('educationalDetails')->with('studentdetails',$student_basic_details);
    }
}
