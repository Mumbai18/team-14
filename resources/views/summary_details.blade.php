<!DOCTYPE html>
<html >
   <head>
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
      <title>First Approval Details</title>
      <base target="_self">
      <meta name="description" content="User information form snippet with timezones" />
      <meta name="google" value="notranslate">
      <link rel="shortcut icon" href="/images/cp_ico.png">
      <!--stylesheets / link tags loaded here-->
      <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
      <style type="text/css">@import url("//bootswatch.com/sandstone/bootstrap.min.css");
         /* CSS used here will be applied after bootstrap.css */
      </style>
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
       <style>
                    a:hover{
                       color: blue;     
                    }
                </style>    
                
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
                $(document).ready(function() {
            var panels = $('.user-infos');
            var panelsButton = $('.dropdown-user');
            panels.hide();

            //Click dropdown
            panelsButton.click(function() {
                //get data-for attribute
                var dataFor = $(this).attr('data-for');
                var idFor = $(dataFor);

                //current button
                var currentButton = $(this);
                idFor.slideToggle(400, function() {
                    //Completed slidetoggle
                    if(idFor.is(':visible'))
                    {
                        currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
                    }
                    else
                    {
                        currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
                    }
                })
            });


            $('[data-toggle="tooltip"]').tooltip();

            $('button').click(function(e) {
                e.preventDefault();
                alert("This is a demo.\n :-)");
            });
        });
            </script>
        </head>
        <body>

            <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">      
            <div style="float:right";>           
              
              </div>
            </div> 


            <div class="nav navbar-nav navbar" id="myNavbar">
            <div class="nav navbar-nav navbar">

            <!-- Side bar starts-->
            
            <div id="mySidenav" class="sidenav" >
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <a href="Upload_documents.php">Upload Documents</a>
          <a href="University_search.php">Apply Now</a>
          <a href="application_status.php">Application Status</a>
          <a href="profile.php">Your Profile</a>
        </div>


        <span style="font-size:30px;cursor:pointer;color:white;" onclick="openNav()">&#9776;</span>

        <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
        </script>

        <!-- side bar ends-->
        </div>
            <a class="navbar-brand" href="#" style="padding-left:50px;color:white;">Egnitia Admissions</a>
            </div>
            
              <ul class="nav navbar-nav navbar-right">

                <li class="active"><a href="indexx.html">Home</a></li>
                <li><a href="#" class="blue">Services</a></li>
                <li><a href="#" class="blue">About Us </a></li>  
                <li><a href="profile.php" class="blue"><span class="glyphicon glyphicon-user"></span>Pro</a></li>
                <li><a href="logout.php" class="blue"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
              </ul>
            </div>
          </div>  
        </nav><div class="container">
      <h1 style="color:blue;">Enter Basic Details</h1>
      <hr>
      <form method="post" action="insertStudent">
         <!--{{ csrf_field() }}-->
         <!-- edit form column -->
         <div class="col-md-12 personal-info">
            <!--<div class="alert alert-info alert-dismissable">
               <a class="panel-close close" data-dismiss="alert">×</a> 
               <i class="fa fa-coffee"></i>
               This is an <strong>.alert</strong>. Use this to show important messages to the user.
               </div>-->
            <!--</form>-->
         </div>
         <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">Basic Details</div>
            <div class="panel-body col-lg-12">
                <!--<div style="float:left;" class="col-md-9">-->
         <div class="form-horizontal">
         <label for="firstname" class="col-lg-6 control-label">First Name</label>
         <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" class="form-control" id="FirstName" name="firstName" placeholder="First Name" 
               value="">

         </div>
         <br>
         <div class="form-horizontal">
         <label for="lastname" class="col-lg-6 control-label">Last Name</label>
         <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" class="form-control" id="LastName" name="lastName" placeholder="Last Name"
               value="">
         </div>
         <br>
         <div class="form-horizontal">
         <label for="email" class="col-lg-4 control-label">Email</label>
         <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
            <input type="text" class="form-control" id="Email" name="emailId" placeholder="Email"
               value="">
         </div>
         <br>
         <div class="form-horizontal">
            <label for="gender" class="col-lg-4 control-label">Gender</label>
            <div class="input-group pb-modalreglog-input-group">
               <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
               <select name="gender" class="form-control">
                  <option value="M">Male</option>
                  <option value="F">Female</option>
                  <option value="O">Other</option>
               </select>
            </div>
         </div>
         <br>
         <div class="form-horizontal">
            <label for="dob" class="col-lg-4 control-label">DOB</label>
            <div class="input-group pb-modalreglog-input-group">
               <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
               <input type="date" class="form-control" id="DOB" name="dob" placeholder="Date of Birth"
                  value="">
            </div>
         </div>
         <br>
         <div class="form-horizontal">
         <label for="age" class="col-lg-4 control-label">Age</label>
         <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
            <input type="number" class="form-control" id="Age" name="age" placeholder="Age"
               value="">
         </div>
         <br>
         <div class="form-horizontal">
         <label for="phone" class="col-lg-4 control-label">Phone Number</label>
         <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
            <input type="number" class="form-control" id="PhoneNo" name="mobileNo" placeholder="PhoneNo"
               value="">
         </div>
         <br>
         <div class="form-horizontal">
            <label for="landline" class="col-lg-4 control-label">Landline</label>
            <div class="input-group pb-modalreglog-input-group">
               <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
               <input type="number" class="form-control" id="Landline" name="landline" placeholder="Landline"
                  value="">
            </div>
            <br>
            <div class="form-horizontal">
               <label for="caste" class="col-lg-4 control-label">Caste</label>
               <div class="input-group pb-modalreglog-input-group">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
                  <input type="text" class="form-control" id="Caste" name="caste" placeholder="Caste"
                     value="">
               </div>
            </div>
        </div>
         </div>
               <br>
               <div class="form-horizontal">
                  <label for="currentAddress" class="col-lg-4 control-label">Current Address</label>
                  <div class="input-group pb-modalreglog-input-group">
                     <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
                     <input type="text" class="form-control" id="currentAddress" name="currentAddress" placeholder="Current Address"
                        value="">
                  </div>
                  <br>
                  <input type="hidden" name="inputtype" value="">
                  <label for="state" class="col-lg-4 control-label" >State</label>
                  <div class="input-group pb-modalreglog-input-group">
                     <span class="input-group-addon"><span class="glyphicon glyphicon-globe"></span></span>
                     <select name="state" class="form-control" value="">
                        <option value="">------------Select State------------</option>
                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                        <option value="Daman and Diu">Daman and Diu</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Lakshadweep">Lakshadweep</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Orissa">Orissa</option>
                        <option value="Pondicherry">Pondicherry</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttaranchal">Uttaranchal</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="West Bengal">West Bengal</option>
                     </select>
                  </div>
                  <br>
               </div>
            </div>
            <div class="form-horizontal">
               <label for="state" class="col-lg-4 control-label" style="">City</label>
               <div class="input-group pb-modalreglog-input-group">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-globe"></span></span>
                  <select name="city" class="form-control" value="">
                     <option value="">------------Select City------------</option>
                     <option value="Mumbai">Mumbai</option>
                     <option value="Pune">Pune</option>
                     <option value="Nagpur">Nagpur</option>
                     <option value="Aurangabad">Aurangabad</option>
                  </select>
               </div>
               <br>
            </div>
         </div>
         <div class="form-horizontal">
         <label for="phone" class="col-lg-4 control-label">PinCode</label>
         <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
            <input type="number" class="form-control" id="Pincode" name="pincode" placeholder="Pincode"
               value="">
         </div>
         <br>
         <div class="form-horizontal">
         <label for="class" class="col-lg-4 control-label">Current Class</label>
         <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" class="form-control" id="class" name="class" placeholder="Class" 
               value="">
         </div>
         <br>
         <div class="form-horizontal">
         <label for="stream" class="col-lg-4 control-label">Stream(If Applicable)</label>
         <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" class="form-control" id="stream" name="stream" placeholder="Stream" 
               value="">
         </div>
         <br>
         <div class="form-horizontal">
         <label for="fathername" class="col-lg-4 control-label">Father's Name</label>
         <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" class="form-control" id="FatherName" name="fatherName" placeholder="Father Name" 
               value="">
         </div>
         <br>  
         <div class="form-horizontal">
         <label for="fatherqual" class="col-lg-4 control-label">Father's Qualification</label>
         <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" class="form-control" id="FatherQual" name="fatherQualification" placeholder="FatherQual" 
               value="">
         </div>
         <br>
         <div class="form-horizontal">
         <label for="fatherofficeaddr" class="col-lg-4 control-label">Father's Office Address</label>
         <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
            <input type="text" class="form-control" id="faoffaddr" name="fatherOfficeAddress" placeholder="Fathers office address"
               value="">
         </div>
         <br>
         <div class="form-horizontal">
         <label for="faphone" class="col-lg-4 control-label">Father's Phone Number</label>
         <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
            <input type="number" class="form-control" id="FatherPhoneNo" name="fatherContact" placeholder="FatherPhoneNo"
               value="">
         </div>
         <br>
         <div class="form-horizontal">
         <label for="faemail" class="col-lg-4 control-label">Father's Email</label>
         <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
            <input type="text" class="form-control" id="FaEmail" name="fatherEmailId" placeholder="FaEmail"
               value="">
         </div>
         <br>
         <div class="form-horizontal">
         <label for="mothername" class="col-lg-4 control-label">Mother's Name</label>
         <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" class="form-control" id="MotherName" name="motherName" placeholder="Mother Name" 
               value="">
         </div>
         <br>  
         <div class="form-horizontal">
         <label for="motherqual" class="col-lg-4 control-label">Mother's Qualification</label>
         <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" class="form-control" id="MotherQual" name="motherQualification" placeholder="MotherQual" 
               value="">
         </div>
         <br>
         <div class="form-horizontal">
         <label for="motherofficeaddr" class="col-lg-4 control-label">Mother's Office Address</label>
         <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
            <input type="text" class="form-control" id="mooffaddr" name="motherOfficeAddress" placeholder="Mother office address"
               value="">
         </div>
         <br>
         <div class="form-horizontal">
         <label for="maphone" class="col-lg-4 control-label">Mother's Phone Number</label>
         <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
            <input type="number" class="form-control" id="MotherPhoneNo" name="motherContact" placeholder="MotherPhoneNo"
               value="">
         </div>
         <br>
         <div class="form-horizontal">
            <label for="moemail" class="col-lg-4 control-label">Mother's Email</label>
            <div class="input-group pb-modalreglog-input-group">
               <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
               <input type="text" class="form-control" id="MoEmail" name="motherEmailId" placeholder="MoEmail"
                  value="">
            </div>
            <br>
            <div class="form-horizontal">
               <label for="income" class="col-lg-4 control-label">Total Family Income</label>
               <div class="input-group pb-modalreglog-input-group">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
                  <input type="number" class="form-control" id="Income" name="totalFamilyIncome" placeholder="Income"
                     value="">
               </div>
               <br>
               <div class="form-horizontal">
                  <label for="members" class="col-lg-4 control-label">Total Family Members</label>
                  <div class="input-group pb-modalreglog-input-group">
                     <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
                     <input type="number" class="form-control" id="Members" name="totalNoOfMembers" placeholder="Members"
                        value="">
                  </div>
                  <br>
                  <div class="form-horizontal">
                     <label for="burden" class="col-lg-4 control-label">Total Burden</label>
                     <div class="input-group pb-modalreglog-input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
                        <input type="number" class="form-control" id="Burden" name="totalBurden" placeholder="Burden"
                           value="">
                     </div>
                     <br>
                     <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-8">
                           <input type="submit" class="btn btn-primary" value="Apply For Approval">
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
      <script></script>
   </body>
</html>