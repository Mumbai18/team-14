<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Student;
use App\Donor;
use DB;

class EducationDetailsInsertController extends Controller
{
    public function storeStudentDetails(Request $request)
    {
      $obj = new Education;
      $obj->owner = $request->owner;
      $obj->type = $request->type;
      $obj->pension = $request->pension;
      $obj->mincome = $request->mincome;
      $obj->fincome = $request->fincome;
      $obj->sincome = $request->sincome;
      $obj->grant = $request->grant;
      $obj->tieup = $request->tieup;
      $obj->board = $request->board;
      $obj->school = $request->school;
      $obj->marks = $request->marks;
      $obj->bboard = $request->bboard;
      $obj->sschool = $request->sschool;
      $obj->bbboard = $request->bbboard;
      $obj->ssschool = $request->ssschool;
      $obj->mmmarks = $request->mmmarks;
      $obj->sports = $request->sports;
      $obj->save();
    }
}
