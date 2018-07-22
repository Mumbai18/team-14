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
    <div style="float: left;">
<div id="google_translate_element"></div>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>
 
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</div>


 </body>
</html>
@endsection