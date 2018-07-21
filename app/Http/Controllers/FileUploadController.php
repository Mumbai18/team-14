<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use User;
use Document;
use DB;

class FileUpload extends Controller
{
    public function uploadFile(Request $request)
    {
      $document = new Document;
      $id = Auth::user()->id;
      $currentuser = User::find($id);
      $document->userId = $currentuser;
      $document->
    }
}

?>
