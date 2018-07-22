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
    <a class="navbar-brand" href="#" style="padding-left:50px;color:white;">Educon</a>
    </div>

      <ul class="nav navbar-nav navbar-right">

        <li class="active"><a href="#">Home</a></li>
        <li><a href="#" class="blue">Services</a></li>
        <li><a href="#" class="blue">About Us </a></li>
        <li><a href="profile.php" class="blue"><span class="glyphicon glyphicon-user"></span>Profile
        <li><a href="logout.php" class="blue"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- Nav Bar Ends-->



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

        <h3>Educational info</h3>

        <form action="edit_profile_backend.php" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">

        {{ csrf_field() }}
        @foreach ($studentdetails as $sd)


          
        </div>
      </div>


        <div style="float:right;" class="col-md-9">
        <div class="form-horizontal">
            <label for="fieldcurrently" class="col-lg-4 control-label">Field Currently</label>
            <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" class="form-control" id="FieldCurrently" name="FieldCurrently" placeholder="Field Currently"
            value="{{ $sd->FieldCurrently }}">
        </div>
        <br>

        <div class="form-horizontal">
            <label for="year1aggregate" class="col-lg-4 control-label">Year 1 aggregate</label>
            <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" class="form-control" id="Year1Aggregate" name="Year1Aggregate" placeholder="Year1Aggregate"
            value="{{ $sd->Year1Aggregate }}">
        </div>
        <br>


        <div class="form-horizontal">
            <label for="year2aggregate" class="col-lg-4 control-label">Year 2 aggregate</label>
            <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" class="form-control" id="Year2Aggregate" name="Year2Aggregate" placeholder="Year2Aggregate"
            value="{{ $sd->Year2Aggregate }}">
        </div>
        <br>


        <div class="form-horizontal">
            <label for="year3aggregate" class="col-lg-4 control-label">Year 3 aggregate</label>
            <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" class="form-control" id="Year3Aggregate" name="Year3Aggregate" placeholder="Year3Aggregate"
            value="{{ $sd->year3aggregate }}">
        </div>
        <br>


        <div class="form-horizontal">
            <label for="tenthaggregate" class="col-lg-4 control-label">Tenth aggregate</label>
            <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
            <input type="text" class="form-control" id="TenthAggregate" name="TenthAggregate" placeholder="TenthAggregate"
            value="{{ $sd->TenthAggregate }}"
        </div>
        <br>

        <div class="form-horizontal">
            <label for="twelfthaggregate" class="col-lg-3 control-label">Twelfth aggregate</label>
            <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" class="form-control" id="TwelfthAggregate" name="TwelfthAggregate" placeholder="TwelfthAggregate"
            value="{{ $sd->TwelfthAggregate }}">

             </div>
</div>


         <div class="form-horizontal">
            <label for="undergrad" class="col-lg-4 control-label">undergrad</label>
            <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
            <input type="text" class="form-control" id="undergrad" name="undergrad" placeholder="undergrad"
            value="{{ $sd->undergrad }}">
            </div>
        </div>
        <br>

         <div class="form-horizontal">
            <label for="postgrad" class="col-lg-4 control-label">postgrad</label>
            <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
            <input type="text" class="form-control" id="postgrad" name="postgrad" placeholder="postgrad"
            value="{{ $sd->postgrad }}">
        </div>
        <br>
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
