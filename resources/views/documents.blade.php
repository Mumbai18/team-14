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
        <h3>Aadhar Card</h3>  
        <br/>
        <div class="col-md-12">  
            <form method="post" action="" enctype="multipart/form-data">  
                <input type="file" class="col-md-4" name="aadhar" id="aadhar"/>
                <div class="col-md-6">
                   <hr> 
                </div> 
            </form>
            <hr>
     </div>
        
     <div class="container" style="width:100%;">  
        <h3>Pan Card</h3>  
        <br/>
        <div class="col-md-12">  
            <form method="post" action="" enctype="multipart/form-data">  
                <input type="file" class="col-md-4" name="pancard" id="pancard"/>
                <div class="col-md-6">
                   <hr> 
                </div> 
            </form>
            <hr>
     </div>
      


    
     <h2>Upload Financial details</h2>
     
     <div class="container" style="width:100%;">  
        <h3>Bank Statement</h3>  
        <br/>
        <div class="col-md-12">  
            <form method="post" action="" enctype="multipart/form-data">  
                <input type="file" class="col-md-4" name="bankStatement" id="bankStatement"/>
                <div class="col-md-6">
                   <hr> 
                </div> 
            </form>
            <hr>
     </div>
     
     <div class="container" style="width:100%;">  
        <h3>Income Certificate</h3>  
        <br/>
        <div class="col-md-12">  
            <form method="post" action="" enctype="multipart/form-data">  
                <input type="file" class="col-md-4" name="incomeCertificate" id="incomeCertificate"/>
                <div class="col-md-6">
                   <hr> 
                </div> 
            </form>
            <hr>
     </div>
       
       <div class="container" style="width:100%;">  
        <h3>Salary Slip</h3>  
        <br/>
        <div class="col-md-12">  
            <form method="post" action="" enctype="multipart/form-data">  
                <input type="file" class="col-md-4" name="salarySlip" id="salarySlip"/>
                <div class="col-md-6">
                   <hr> 
                </div> 
            </form>
            <hr>
     </div>

     <h2>Upload Academic details</h2>
     
     <div class="container" style="width:100%;">  
        <h3>1st Recent Marksheet</h3>  
        <br/>
        <div class="col-md-12">  
            <form method="post" action="" enctype="multipart/form-data">  
                <input type="file" class="col-md-4" name="marksheet1" id="marksheet1"/>
                <div class="col-md-6">
                   <hr> 
                </div> 
            </form>
            <hr>
     </div>
     
     <div class="container" style="width:100%;">  
        <h3>2nd Recent Marksheet</h3>  
        <br/>
        <div class="col-md-12">  
            <form method="post" action="Passport_Backend.php" enctype="multipart/form-data">  
                <input type="file" class="col-md-4" name="marksheet2" id="marksheet2"/>
                <div class="col-md-6">
                   <hr> 
                </div> 
            </form>
            <hr>
     </div>
     
     <div class="container" style="width:100%;">  
        <h3>3rd Recent Marksheet</h3>  
        <br/>
        <div class="col-md-12">  
            <form method="post" action="Passport_Backend.php" enctype="multipart/form-data">  
                <input type="file" class="col-md-4" name="marksheet3" id="marksheet3"/>
                <div class="col-md-6">
                   <hr> 
                </div> 
            </form>
            <hr>
     </div>

     <h2>Upload Extra details</h2>

	 <div class="container" style="width:100%;">  
        <h3>Your Extra-Ciricular Certificate</h3>  
        <br/>
        <div class="col-md-12">  
            <form method="post" action="Passport_Backend.php" enctype="multipart/form-data">  
                <input type="file" class="col-md-4" name="extra1" id="extra1"/>
                <div class="col-md-6">
                   <hr> 
                </div> 
            </form>
            <hr>
     </div>     
     


 </body>
</html>