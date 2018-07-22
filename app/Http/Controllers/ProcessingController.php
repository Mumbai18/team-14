<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Student;

class ProcessingController extends Controller
{

	public function secondApproval(Request $request){
		$allstudents = Student::where('status','=','2')->orderby('period')->get();

		//storing number of days as deadline and (income-burden)/members
		return view('secondapproval')->with('allstudents',$allstudents);

	}

}
