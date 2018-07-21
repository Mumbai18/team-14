<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Document;
use DB;

class FileUploadController extends Controller
{
    public function uploadFile(Request $request)
    {
      $id = Auth::user()->id;
      $currentuser = User::find($id);
      if($request->hasFile('aadhar'))
      {
        $document = new Document;
        $document->userId = $id;
        $document->name = 'aadhar';
        $document->path = $id.'.pdf';
        $document->save();
        $file = $request->file('aadhar');
        $file->move('/storage/app','aadhar'.$id.'.'.$file->getClientOriginalExtension());
      }
      if($request->hasFile('pancard'))
      {
        $document = new Document;
        $document->userId = $id;
        $document->name = 'pancard';
        $document->path = $id.'.pdf';
        $document->save();
        $file = $request->file('pancard');
        $file->move('/storage/app','pancard'.$id.'.'.$file->getClientOriginalExtension());

      }
      if($request->hasFile('bankStatement'))
      {
        $document = new Document;
        $document->userId = $id;
        $document->name = 'bankStatement';
        $document->path = $id.'.pdf';
        $document->save();
        $file = $request->file('bankStatement');
        $file->move('/storage/app','bankStatement'.$id.'.'.$file->getClientOriginalExtension());
      }
      if($request->hasFile('incomeCertificate'))
      {
        $document = new Document;
        $document->userId = $id;
        $document->name = 'incomeCertificate';
        $document->path = $id.'.pdf';
        $document->save();
        $file = $request->file('incomeCertificate');
        $file->move('/storage/app','incomeCertificate'.$id.'.'.$file->getClientOriginalExtension());
      }
      if($request->hasFile('salarySlip'))
      {
        $document = new Document;
        $document->userId = $id;
        $document->name = 'salarySlip';
        $document->path = $id.'.pdf';
        $document->save();
        $file = $request->file('salarySlip');
        $file->move('/storage/app','salarySlip'.$id.'.'.$file->getClientOriginalExtension());
      }
      if($request->hasFile('marksheet1'))
      {
        $document = new Document;
        $document->userId = $id;
        $document->name = 'marksheet1';
        $document->path = $id.'.pdf';
        $document->save();
        $file = $request->file('marksheet1');
        $file->move('/storage/app','marksheet1_'.$id.'.'.$file->getClientOriginalExtension());
      }
      if($request->hasFile('marksheet2'))
      {
        $document = new Document;
        $document->userId = $id;
        $document->name = 'marksheet2';
        $document->path = $id.'.pdf';
        $document->save();
        $file = $request->file('marksheet2');
        $file->move('/storage/app','marksheet2_'.$id.'.'.$file->getClientOriginalExtension());
      }
      if($request->hasFile('marksheet3'))
      {
        $document = new Document;
        $document->userId = $id;
        $document->name = 'marksheet3';
        $document->path = $id.'.pdf';
        $document->save();
        $file = $request->file('marksheet3');
        $file->move('/storage/app','marksheet3_'.$id.'.'.$file->getClientOriginalExtension());
      }
      if($request->hasFile('extra1'))
      {
        $document = new Document;
        $document->userId = $id;
        $document->name = 'extra1';
        $document->path = $id.'.pdf';
        $document->save();
        $file = $request->file('extra1');
        $file->move('/storage/app','extra1_'.$id.'.'.$file->getClientOriginalExtension());
      }
      if($request->hasFile('feeStructure'))
      {
        $document = new Document;
        $document->userId = $id;
        $document->name = 'feeStructure';
        $document->path = $id.'.pdf';
        $document->save();
        $file = $request->file('feeStructure');
        $file->move('/storage/app','feeStructure'.$id.'.'.$file->getClientOriginalExtension());
      }

      return view('period_amount');

    }
}


