<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\User;
use App\Student;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class PrimaryDetailsRetrievalController extends Controller
{
    //

	public function showDetails()
	{

    	$student_basic_details = Student::where('status','=','0')->get();
    	return view('firstapproval')->with('studentdetails',$student_basic_details);



	}    

	public function showSummary(){
		$execuser = Auth::user();
		$studentsAssigned = Student::where('execAssigned','=','$execuser->id')->get();
		foreach($studentsAssigned as $s){
			
		}
		return view('summary')-with('studentsAssigned',$studentsAssigned);
	}
}
