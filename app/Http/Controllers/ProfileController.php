<?php

namespace App\Http\Controllers;
use App\Student;
use App\User;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //
    public function showProfile(Request $request)
    {
    	//$userId = Auth::id();
    	$id = Auth::user()->id;
    	
    	return view('profile');
    	
    	
    }
}
