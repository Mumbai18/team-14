@include(nav_side)

@section
<!DOCTYPE html>
<html>
<head>
	<title>Financial Details</title>
</head>
<body>

<h2>Upload Financial details</h2>
    
    
    <div class="container" style="width:100%;">  
        <h3>Bank Details</h3>  
        <br/>
        <div class="col-md-12">  
            <form method="post" action="Passport_Backend.php" enctype="multipart/form-data">  
                <input type="file" class="col-md-4" name="Passport" id="image"/>
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
            <form method="post" action="Passport_Backend.php" enctype="multipart/form-data">  
                <input type="file" class="col-md-4" name="Passport" id="image"/>
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
            <form method="post" action="Passport_Backend.php" enctype="multipart/form-data">  
                <input type="file" class="col-md-4" name="Passport" id="image"/>
                <div class="col-md-6">
                   <hr> 
                </div> 
            </form>
            <hr>
     </div>
       


 </body>
</html>
@endsection