<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PrimaryDetailsRetrievalController extends Controller
{
    //

	public function showDetails()
	{
    	$result = DB::select('select * from students');
		return view('primary_details',['result'=>$result]);
	}    
}
