<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Student;
use App\Donor;
use DB;

class InsertDetailsController extends Controller
{
    public function storeStudentDetails(Request $request)
    {

      /*$rules = array(


      'gender' => 'required',
      'dob' => 'required|date',
      'blood_group' => 'required',
      'contact_no' => 'required|digits:10',
      'city' => 'required',
      'state' => 'required',
      'country' => 'required',
      'pincode' => 'required|digits:6',

      );*/

      /*$validator = Validator::make($data, $rules);

      if ($validator->fails()) {
      //pass validator errors as errors object for ajax response

      return Response::json(array(
      'success' => false,
      'errors' => $validator->getMessageBag()->toArray()

      ), 400); // 400 being the HTTP code for an invalid request.
      }  */


      $student = new Student;
      $student->firstName = $request->firstName;
      $student->lastName = $request->lastName;
      $student->emailId = $request->emailId;
      $student->mobileNo = $request->mobileNo;
      $student->landline = $request->landline;
      $student->age = $request->age;
      $student->dob = $request->dob;
      $student->gender = $request->gender;
      $student->class = $request->class;
      $student->stream = $request->stream;
      $student->major = $request->major;
      $student->caste = $request->caste;
      $student->currentAddress = $request->currentAddress; 
      $student->pincode= $request->pincode;           
      $student->city = $request->city;
      $student->state = $request->state;
      $student->fatherName = $request->fatherName;
      $student->fatherContact = $request->fatherContact;
      $student->fatherEmailId = $request->fatherEmailId;
      $student->fatherQualification = $request->fatherQualification;
      $student->fatherOfficeAddress = $request->fatherOfficeAddress;
      $student->motherName = $request->motherName;
      $student->motherContact = $request->motherContact;
      $student->motherEmailId = $request->motherEmailId;
      $student->motherQualification = $request->motherQualification;
      $student->motherOfficeAddress = $request->motherOfficeAddress;
      $student->totalFamilyIncome = $request->totalFamilyIncome;
      $student->totalBurden = $request->totalBurden;
      $student->totalNoOfMembers = $request->totalNoOfMembers;
      $student->user_id = Auth::user()->id;
      $student->save();

      return view('studentstatus');

}

public function updateFirstStatus(Request $request){
      
      $status = $request->statuses;
      $i=0;
      foreach($status as $s){
            $stud = Student::find($s);
            $stud->status = 1;
            $stud->save();
      }

}


}
