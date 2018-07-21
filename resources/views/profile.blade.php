@include(nav_side)
@section
	<div class="container" style="width:100%">
        <div class="row">
        <br>
        <br>

        <!--<div class="col-md-5  toppad  pull-right col-md-offset-3 ">
            <A href="editprofile.php" >Edit Profile&nbsp&nbsp</A>

            <A href="">Logout</A>-->
        <br>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


            <div class="panel panel-primary">
                <div class="panel-heading">
                <h3 class="panel-title"><?php echo $fname, " ", $lname ?></h3>
                </div>
                <div class="panel-body">
                <div class="row">
                    <div class="col-md-3 col-lg-3 " align="center" >
                    <?php echo '<img style="width:150px; height:175px;" class="img-rounded img-responsive" src="data:image/jpeg;base64,'.base64_encode( $row1['User_Picture'] ).'"/>';?>
                    <!--<img alt="User Pic" src=""" class="img-rounded img-responsive"> </div>-->
                    </div>

                    <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                    <dl>
                        <dt>DEPARTMENT:</dt>
                        <dd>Administrator</dd>
                        <dt>HIRE DATE</dt>
                        <dd>11/12/2013</dd>
                        <dt>DATE OF BIRTH</dt>
                        <dd>11/12/2013</dd>
                        <dt>GENDER</dt>
                        <dd>Male</dd>
                    </dl>
                    </div>-->
                    <div class=" col-md-9 col-lg-9 ">
                    <table class="table table-user-information">
                        <tbody>

                        <tr>
                            <td>Date of Birth</td>
                            <td><?php echo $dob ?></td>
                        </tr>

                            <tr>
                                <tr>
                            <td>Gender</td>
                            <td><?php echo $gender ?></td>
                        </tr>
                            <tr>
                            <td>Home Address</td>
                            <td><?php echo $c_address ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><a href="href="mailto:<?php echo $email; ?>?body=<?php echo "Hello"; ?>"> <?php echo $email; ?></a></td>
                        </tr>
                            <td>Phone Number</td>
                            <td><?php echo $phone_no ?></td>

                        </tr>

                        </tbody>
                    </table>

                    <a href="application_status.php" class="btn btn-success">My Application Status</a>
                    <a href="edit_profile.php" class="btn btn-primary">Edit Profile</a>
                    <a href="logout.php" class="btn btn-danger">Log Out</a>
                    </div>
                </div>
                </div>
                    <div class="panel-footer">

                            <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                            <span class="pull-right">
                                <a href="edit_profile.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                                <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                            </span>
                        </div>

            </div>
            </div>
    @endsection
