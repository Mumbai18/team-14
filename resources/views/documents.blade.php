<<<<<<< HEAD
@extends('layouts.app')

@section('content')

<h2>Upload Personal details</h2>
    <div class="container" style="width:100%;">  
        <form method="post" action="uploadDocuments" enctype="multipart/form-data"> 
        <h3>Aadhar Card</h3>  
=======
<?php
	include(nav_side.blade.php);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Personal Details</title>
</head>
<body>

<h2>Upload Personal details</h2>
    <div class="container" style="width:100%;">
        <form method="post" action="" enctype="multipart/form-data">
        <h3>Aadhar Card</h3>
>>>>>>> 173f73578f9b7fcf224cba5ab0d0e17a5413fe60
        <br/>
        <div class="col-md-12">

                <input type="file" class="col-md-4" name="aadhar" id="aadhar" required/>
                <div class="col-md-6">
                   <hr>
                </div>
            <hr>
     </div>

     <div class="container" style="width:100%;">
        <h3>Pan Card</h3>
        <br/>
        <div class="col-md-12">

                <input type="file" class="col-md-4" name="pancard" id="pancard"  required/>
                <div class="col-md-6">
                   <hr>
                </div>

            <hr>
     </div>




     <h2>Upload Financial details</h2>

     <div class="container" style="width:100%;">
        <h3>Bank Statement</h3>
        <br/>
        <div class="col-md-12">

                <input type="file" class="col-md-4" name="bankStatement" id="bankStatement" required/>
                <div class="col-md-6">
                   <hr>
                </div>

            <hr>
     </div>

     <div class="container" style="width:100%;">
        <h3>Income Certificate</h3>
        <br/>
        <div class="col-md-12">

                <input type="file" class="col-md-4" name="incomeCertificate" id="incomeCertificate"  required/>
                <div class="col-md-6">
                   <hr>
                </div>

            <hr>
     </div>

       <div class="container" style="width:100%;">
        <h3>Salary Slip</h3>
        <br/>
        <div class="col-md-12">
                <input type="file" class="col-md-4" name="salarySlip" id="salarySlip" required/>
                <div class="col-md-6">
                   <hr>
                </div>

            <hr>
     </div>

     <h2>Upload Academic details</h2>

     <div class="container" style="width:100%;">
        <h3>1st Recent Marksheet</h3>
        <br/>
        <div class="col-md-12">
                <input type="file" class="col-md-4" name="marksheet1" id="marksheet1" required/>
                <div class="col-md-6">
                   <hr>
                </div>
            <hr>
     </div>

     <div class="container" style="width:100%;">
        <h3>2nd Recent Marksheet</h3>
        <br/>
        <div class="col-md-12">

                <input type="file" class="col-md-4" name="marksheet2" id="marksheet2" required/>
                <div class="col-md-6">
                   <hr>
                </div>

            <hr>
     </div>

     <div class="container" style="width:100%;">
        <h3>3rd Recent Marksheet</h3>
        <br/>
        <div class="col-md-12">

                <input type="file" class="col-md-4" name="marksheet3" id="marksheet3" required/>
                <div class="col-md-6">
                   <hr>
                </div>

            <hr>
     </div>

     <div class="container" style="width:100%;">
        <h3>Fee Structure</h3>
        <br/>
        <div class="col-md-12">
                <input type="file" class="col-md-4" name="feeStructure" id="feeStructure" required/>
                <div class="col-md-6">
                   <hr>
                </div>
            <hr>
     </div>


     <h2>Upload Extra details</h2>

	 <div class="container" style="width:100%;">
        <h3>Your Extra-Ciricular Certificate</h3>
        <br/>
        <div class="col-md-12">

                <input type="file" class="col-md-4" name="extra1" id="extra1" required/>
                <div class="col-md-6">
                   <hr>
                </div>

            <hr>

        <input type="submit" class="btn btn-primary" value="Save Changes">
        </form>
     </div>


<<<<<<< HEAD
@endsection
=======

 </body>
</html>
>>>>>>> 173f73578f9b7fcf224cba5ab0d0e17a5413fe60
