<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use User;
use Document;
use DB;

class FileUpload extends Controller
{
    public function makeRequest(Request $request)
    {
      $req = new Request;
      $req->number = $request->number;
      $req->pinCode = $request->pinCode;
      $req->save();
      //send message to the executive
    }
}

?>
