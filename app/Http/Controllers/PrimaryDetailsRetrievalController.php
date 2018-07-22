<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\User;
use App\Student;
use App\Exec;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


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
		error_log($execuser);
		$exec = Exec::where('user_id','=',$execuser->id)->first();
		$studentsAssigned = Student::where('execAssigned','=',$exec->id)->get();
		
		error_log($studentsAssigned);
		return view('summary')->with('studentsAssigned',$studentsAssigned);
	}
}
