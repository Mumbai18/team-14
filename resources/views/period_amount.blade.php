<!DOCTYPE html>
<html>
<head>
	<title>Period and Amount</title>
</head>
<body>
	<meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/> 
        <link href="css/bootstrap-form-helpers.min.css" rel="stylesheet"> 
        <script src="js/bootstrap-formhelpers.min.js"></script> 
        <link href="assets/css/bootstrap.css" rel="stylesheet"> 
        <link href="assets/css/bootstrap-responsive.css" rel="stylesheet"> 
        <link href="assets/css/bootstrap-formhelpers.css" rel="stylesheet"> 
        <link href="assets/css/bootstrap-formhelpers-countries.flags.css" rel="stylesheet"> 
        <link href="assets/css/bootstrap-formhelpers-currencies.flags.css" rel="stylesheet"> 
        <link href="assets/css/docs.css" rel="stylesheet"> 
        <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet"> 
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>

</body>

	<div>
		<form action="updatePeriodAmt" method="POST">
        <div class="form-group"> 
                                    <label for="period">Enter the tentative days within which donation is to be made</label> 
                                    <div class="input-group pb-modalreglog-input-group"> 
                                        <input type="number" class="form-control" id="period" name="period" placeholder="Period in Days"> 
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-calender"></span></span> 
                                 </div>
                                 </div> 
                                <div class="form-group"> 
                                    <label for="amount">Enter the amount needed in rupees</label> 
                                    <div class="input-group pb-modalreglog-input-group"> 
                                        <input type="number" class="form-control" id="amountRequired" name="amountRequired" placeholder="Amount in Rupees"> 
                                        <span class="input-group-addon"><span class="fa fa-rupee"></span></span> 
                                    </div> 
                                </div> 

                   				 <div class="form-group"> 
                                      <button style="float:left; margin-top: 20px;" type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button> 
                                    </div> 
                                      
                                </div> 
                            </form>  
                             
	</div>
</html>