<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use User;
use Student;
use Donor;
use DB;

class InsertDetails extends Controller
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
            $student->firstName = $request->firstName
            $student->lastName = $request->lastName;
            $student->emailId = $request->emailId
            $student->mobileNo = $request->mobileNo;
            $student->landline = $request->landline;
            $student->age = $request->age;
            $student->dob = $request->dob;
            $student->gender = $request->gender;
            $student->class = $request->class;
            $student->stream = $request->stream;
            $student->major  = $request->major;
            $student->caste = $request->caste;
            $student->addressLine1 = $request->addressLine1;
            $student->addressLine2 = $request->addressLine2; 
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
            $student->totalFamilyMembers = $request->totalFamilyMembers;
            
            $student->save();

}
