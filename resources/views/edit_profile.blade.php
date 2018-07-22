<!DOCTYPE html>
<html>
<head>
	<title>Edit profile</title>

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
    

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <base target="_self">
    <meta name="description" content="User information form snippet with timezones" />
    <meta name="google" value="notranslate">
    <link rel="shortcut icon" href="/images/cp_ico.png">

    
    <!--stylesheets / link tags loaded here-->



    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
    

    

    <style type="text/css">@import url("//bootswatch.com/sandstone/bootstrap.min.css");

    /* CSS used here will be applied after bootstrap.css */</style>

    <style>
                .footer {
                position: fixed;
                left: 0;
                bottom: 0;
                height: 20px;
                width: 100%;
                background-color: #1a1a1a;
                color: white;
                text-align: center;
                }
            </style>
                <style>

                .mySlides {display:none}
                .w3-left, .w3-right, .w3-badge {cursor:pointer}
                .w3-badge {height:13px;width:13px;padding:0}
                .navbar-inverse { margin : 0;}


                    .user-row {
                margin-bottom: 14px;
            }

            .user-row:last-child {
                margin-bottom: 0;
            }

            .dropdown-user {
                margin: 13px 0;
                padding: 5px;
                height: 100%;
            }

            .dropdown-user:hover {
                cursor: pointer;
            }

            .table-user-information > tbody > tr {
                border-top: 1px solid rgb(221, 221, 221);
            }

            .table-user-information > tbody > tr:first-child {
                border-top: 0;
            }


            .table-user-information > tbody > tr > td {
                border-top: 0;
            }
            .toppad
            {margin-top:20px;
            }
        </style>

        <style>
            .sidenav {
                height: 100%;
                width: 0;
                position: fixed;
                z-index: 1;
                top: 0;
                left: 0;
                background-color: #0d0d0d;
                overflow-x: hidden;
                transition: 0.5s;
                padding-top: 60px;
            }

            .sidenav a {
                padding: 8px 8px 8px 32px;
                text-decoration: none;
                font-size: 18px;
                color: white;
                display: block;
                transition: 0.3s;
            }

            .sidenav a:hover {
                color: blue;
            }

            .sidenav .closebtn {
                position: absolute;
                top: 0;
                right: 25px;
                font-size: 36px;
                margin-left: 50px;
            }

            @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
            }
        </style>



    <script>
        $(document).ready(function(){
        var date_input=$('input[name="DOB"]'); //our date input has the name "DOB"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        var options={
            format: 'yyyy-mm-dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
        };
        date_input.datepicker(options);
        })
    </script>

</head>
<body>

	<div class="container">
    <h1 style="color:blue;">Edit Profile</h1>
  	<hr>
	  
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <!--<div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          This is an <strong>.alert</strong>. Use this to show important messages to the user.
        </div>-->

        <h3>Personal info</h3>
        
        <form action="edit_profile_backend.php" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">


        <div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <?php echo '<img style="width:250px; height:200px;" class="img-rounded img-responsive" src="data:image/jpeg;base64,'.base64_encode( $row1['User_Picture'] ).'"/>';?>    
          <h6>Upload a different photo...</h6>
          <!--<form name="form" action="edit_profile_backend.php" method="POST" >-->
          
          <div class="col-md-12">
          <input type="file" class="form-control"  name="picture" class="col-md-8" style="float:left; padding:5px;/">
          <br><br>
          
          </div>
          <!--</form>-->
        </div>
      </div>
    
            
        <div style="float:right;" class="col-md-9">
        <div class="form-horizontal">
            <label for="firstname" class="col-lg-4 control-label">First Name</label>
            <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" class="form-control" id="FirstName" name="FirstName" placeholder="First Name" 
            value="<?php echo $fname ?>">
        </div> 
        <br>

        <div class="form-horizontal">
            <label for="middlename" class="col-lg-4 control-label">Middle Name</label>
            <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" class="form-control" id="MiddleName" name="MiddleName" placeholder="Middle Name"
            value="<?php echo $mname ?>">
        </div> 
        <br>


        <div class="form-horizontal">
            <label for="lastname" class="col-lg-4 control-label">Last Name</label>
            <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" class="form-control" id="LastName" name="LastName" placeholder="Last Name"
            value="<?php echo $lname ?>">
        </div> 
        <br>

        
        <div class="form-horizontal">
            <label for="formerlastname" class="col-lg-4 control-label">Former Last Name</label>
            <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" class="form-control" id="FormerLastName" name="FormerLastName" placeholder="FormerLast Name"
            value="<?php echo $flname ?>">
        </div> 
        <br>


        <div class="form-horizontal">
            <label for="email" class="col-lg-4 control-label">Email</label>
            <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
            <input type="text" class="form-control" id="Email" name="Email" placeholder="Email"
            value="<?php echo $email ?>">
        </div> 
        <br>

        <!--<div class="form-horizontal">
            <label for="gender" class="col-lg-3 control-label">Gender</label>
            <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <select name="Gender" class="form-control">
            <option value="M">Male</option>
            <option value="F">Female</option>
            <option value="O">Other</option>
             </select>
            
             </div>
</div-->


         <div class="form-horizontal">
            <label for="dob" class="col-lg-4 control-label">DOB</label>
            <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
            <input type="date" class="form-control" id="DOB" name="DOB" placeholder="Date of Birth"
            value="<?php echo $dob ?>">
            </div>
        </div>
        <br>

        <div class="form-horizontal">
            <label for="phone" class="col-lg-4 control-label">Phone Number</label>
            <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
            <input type="number" class="form-control" id="PhoneNo" name="PhoneNo" placeholder="PhoneNo"
            value="<?php echo $phone_no ?>">
        </div> 
        <br>

        <div class="form-horizontal">
            <label for="password" class="col-lg-4 control-label">Update Password</label>
            <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            <input type="password" class="form-control" id="Password" name="Password" placeholder="Password"
            value="<?php echo $pwd ?>">
        </div> 
        <br>

        <div class="form-horizontal">
            <label for="currentaddress" class="col-lg-4 control-label">Current Address</label>
            <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
            <input type="text" class="form-control" id="CurrentAddress" name="CurrentAddress" placeholder="Current Address"
            value="<?php echo $p_address?>">
        </div> 
        <br>

         <div class="form-horizontal">
            <label for="permanentaddress" class="col-lg-4 control-label">Permanent Address</label>
            <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
            <input type="text" class="form-control" id="PermanentAddress" name="PermanentAddress" placeholder="Permanent tAddress"
            value="<?php echo $c_address ?>">
        </div> 
        <br>
        
                 <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
</div>
<hr>
  
  <script>
    // sandbox disable popups
    if (window.self !== window.top && window.name!="view1") {;
      window.alert = function(){/*disable alert*/};
      window.confirm = function(){/*disable confirm*/};
      window.prompt = function(){/*disable prompt*/};
      window.open = function(){/*disable open*/};
    }
    
    // prevent href=# click jump
    document.addEventListener("DOMContentLoaded", function() {
      var links = document.getElementsByTagName("A");
      for(var i=0; i < links.length; i++) {
        if(links[i].href.indexOf('#')!=-1) {
          links[i].addEventListener("click", function(e) {
          console.debug("prevent href=# click");
              if (this.hash) {
                if (this.hash=="#") {
                  e.preventDefault();
                  return false;
                }
                else {
                  /*
                  var el = document.getElementById(this.hash.replace(/#/, ""));
                  if (el) {
                    el.scrollIntoView(true);
                  }
                  */
                }
              }
              return false;
          })
        }
      }
    }, false);
  </script>
  
  <!--scripts loaded here-->
  
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
  
  <script>
  
  </script>
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