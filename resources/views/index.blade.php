<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <title>Home Page</title> 
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

        <!-- CSS for Nav Bar-->
        <style> 
                #myNavbar { 
                    overflow: hidden; 
                    background-color: #333; 
                    } 
             
                    #myNavbar a { 
                    float: left; 
                    display: block; 
                    color: #f2f2f2; 
                    text-align: center; 
                    padding: 14px 16px; 
                    text-decoration: none; 
                    font-size: 17px; 
                    } 
             
                    .myNavbar a:hover { 
                    background-color: #ddd; 
                    color: black; 
                    } 
             
                    .active { 
                    background-color: #4CAF50; 
                    color: white; 
                    } 
             
                    .myNavbar .icon { 
                    display: none; 
                    } 
             
                    @media screen and (max-width: 600px) { 
                    .myNavbar a:not(:first-child) {display: none;} 
                    .myNavbar a.icon { 
                        float: right; 
                        display: block; 
                    } 
                    } 
             
                    @media screen and (max-width: 600px) { 
                    .myNavbar.responsive {position: relative;} 
                    .myNavbar.responsive .icon { 
                        position: absolute; 
                        right: 0; 
                        top: 0; 
                    } 
                    .myNavbar.responsive a { 
                        float: none; 
                        display: block; 
                        text-align: left; 
                    } 
                    } 
            </style> 


            <!-- CSS for Side bar-->

            <style> 
                    .sidenav { 
                        height: 69%; 
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
                     
             
             
            
    </head>

    

    <body style="background-color:#e6e6e6">

            <!-- Nav Bar Starts--> 
 
<nav class="navbar navbar-inverse"> 
        <div class="container-fluid"> 
          <div class="navbar-header">       
          <div style="float:right";>            
             
            </div> 
          </div>  
       
       
          <div class="nav navbar-nav navbar" id="myNavbar"> 
          <div class="nav navbar-nav navbar"> 
       
          <!-- Side bar starts--> 
        <!--   
          <div id="mySidenav" class="sidenav" > 
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> 
        <a href="#">Upload Documents</a> 
        <a href="#">Apply Now</a> 
        <a href="#">Application Status</a> 
        <a href="#">Your Profile</a> 
      </div> 
       
       
      <span style="font-size:30px;cursor:pointer;color:white; padding-left:3px;" onclick="openNav()">&#9776;</span> 
       
      <script> 
      function openNav() { 
          document.getElementById("mySidenav").style.width = "250px"; 
      } 
       
      function closeNav() { 
          document.getElementById("mySidenav").style.width = "0"; 
      } 
      </script>  -->
       
      <!-- side bar ends--> 
      </div> 

          <img src="images/jsg.jpg" style="float:left;width:100px;height:50px;">
          <a class="navbar-brand" href="index.blade.php" style="padding-left:50px;color:white;">Educon : By Jain Social Group</a> 
          </div> 
           
            <ul class="nav navbar-nav navbar-right"> 
              
              <!-- <li><img src="../../public/images/jsg.jpg"></li> -->

              <li class="active"><a href="index.blade.php">Home</a></li> 
              <li><a href="#">Services</a></li> 
              <li><a href="#">About Us</a></li>   
              <li><a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> 
              <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> 
            </ul> 
          </div> 
        </div>   
      </nav> 
      <!-- Nav Bar Ends--> 

      <!-- Image Slider Starts--> 
      <script type="text/javascript"> 
        $(document).ready(function() { 
          $('#myCarousel').carousel({ 
            interval: 5000 
          }) 
        }); 
      </script> 
           
       
         
      <!-- Full Page Image Background Carousel Header --> 
      <header id="myCarousel" class="carousel slide"> 
          <!-- Indicators --> 
          <ol class="carousel-indicators"> 
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li> 
              <li data-target="#myCarousel" data-slide-to="1"></li> 
              <li data-target="#myCarousel" data-slide-to="2"></li> 
              <li data-target="#myCarousel" data-slide-to="3"></li> 
              <li data-target="#myCarousel" data-slide-to="4"></li> 
              <li data-target="#myCarousel" data-slide-to="5"></li> 
              <li data-target="#myCarousel" data-slide-to="6"></li> 
              <li data-target="#myCarousel" data-slide-to="7"></li> 
              <li data-target="#myCarousel" data-slide-to="8"></li> 
              <li data-target="#myCarousel" data-slide-to="11"></li> 
              <li data-target="#myCarousel" data-slide-to="10"></li> 
               
          </ol> 
       
          <!-- Wrapper for Slides --> 
          <div class="carousel-inner"> 
              <div class="item active"> 
                  <!-- Set the first background image using inline CSS below. --> 
                  <img src="images/image2.jpg" style="width:100%; height:450px;"> 
                                 </div> 
              <div class="item"> 
                  <!-- Set the second background image using inline CSS below. --> 
                  <img src="image2.jpg" style="width:100%; height:450px;"> 
              </div> 
              <div class="item"> 
                  <!-- Set the third background image using inline CSS below. --> 
                  <img src="image3.jpg" style="width:100%; height:450px;"> 
              </div> 
       
              <div class="item"> 
                  <!-- Set the third background image using inline CSS below. --> 
                  <img src="university4.jpeg" style="width:100%; height:450px;"> 
              </div> 
       
              <div class="item"> 
                  <!-- Set the third background image using inline CSS below. --> 
                  <img src="university5.jpeg" style="width:100%; height:450px;"> 
              </div> 
       
              <div class="item"> 
                      <!-- Set the third background image using inline CSS below. --> 
                      <img src="university6.jpeg" style="width:100%; height:450px;"> 
              </div> 
       
              <div class="item"> 
                      <!-- Set the third background image using inline CSS below. --> 
                      <img src="university7.jpeg" style="width:100%; height:450px;"> 
              </div> 
       
              <div class="item"> 
                      <!-- Set the third background image using inline CSS below. --> 
                      <img src="university8.jpeg" style="width:100%; height:450px;"> 
              </div> 
       
              <div class="item"> 
                      <!-- Set the third background image using inline CSS below. --> 
                      <img src="university9.jpeg" style="width:100%; height:450px;"> 
              </div> 
       
              <div class="item"> 
                      <!-- Set the third background image using inline CSS below. --> 
                      <img src="university10.jpeg" style="width:100%; height:450px;"> 
              </div> 
       
              <div class="item"> 
                      <!-- Set the third background image using inline CSS below. --> 
                      <img src="university11.jpeg" style="width:100%; height:450px;"> 
              </div> 
       
       
          </div> 
 
      <!-- Controls --> 
        <a class="left carousel-control" href="#myCarousel" data-slide="prev"> 
            <span class="icon-prev"></span> 
        </a> 
        <a class="right carousel-control" href="#myCarousel" data-slide="next"> 
            <span class="icon-next"></span> 
        </a> 
     
    </header><style> 
        button{ 
            padding:0px; 
            margin:0px; 
            background:none; 
            border:none; 
        } 
        button:focus {outline:0;} 
    </style> 
    <script> 
    $(document).ready(function(){ 
        $("#post").click(function(){ 
            $("#box").load("post.php"); 
        }); 
      $("#profile").click(function(){ 
            $("#box").load("profile.php"); 
        }); 
    }); 
    </script> 
     
<!-- Image Slider Ends--> 

       
       
      

    </body>
</html>