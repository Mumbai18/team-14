<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function display(Request $request)
    {
    	return view('dashboard');
    }
}
