<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimaryDetailsRetrievalController extends Controller
{
    //

	public function showDetails()
	{
    	$request = Request::all();
    	return view('primary_details')with('request', $request);
	}    
}
