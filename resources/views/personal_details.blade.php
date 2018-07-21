<?php 
	include(nav_side.blade.php);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Personal Details</title>
</head>
<body>

<h2>Upload Your Documents</h2>
    <div class="container" style="width:100%;">  
        <h3>Passport</h3>  
        <br/>
        <div class="col-md-12">  
            <form method="post" action="Passport_Backend.php" enctype="multipart/form-data">  
                <input type="file" class="col-md-4" name="Passport" id="image"/>
                <div class="col-md-6">
                    <?php

    

                        if($passport_img==null){
                            echo"<input  type='submit' id='insert' value='Upload' class='btn btn-info' />";
                        }
                        else{
                            echo "<div class='col-md-12'>";
                            echo "<input  type='submit' value='Submitted' name='View_Passport' class='btn btn-success' class='View_File' class='col-md-2' />";
                            echo '<div class="col-md-3 col-lg-3 " align="center" > ';
                            echo '<img style="width:150px; height:175px;" class="img-rounded img-responsive" src="data:image/jpeg;base64,'.base64_encode( $doc_row['Passport'] ).'"/>';
                            
                            echo '</div>';
                            echo "</div>"; 


                            
                        }
                    ?> 
                    <hr> 
                </div>
                
            </form>
            <hr>
            

        </div>
        <br/>  <hr>


        <h3>Driving License</h3>  
        <br/>
        <div class="col-md-12">  
            <form method="post" action="Driving_License_Backend.php" enctype="multipart/form-data">  
                <input type="file" class="col-md-4" name="Driving_License" id="image"/>
                <div class="col-md-6">
                    <?php
                        if($driving_license_img==null){
                            echo"<input  type='submit' id='insert' value='Upload' class='btn btn-info' />";
                        }
                        else{
                            echo "<div class='col-md-12'>";
                            echo "<input  type='submit' value='Submitted' name='View_Passport' class='btn btn-success' class='View_File' class='col-md-2' />";
                            echo '<div class="col-md-3 col-lg-3 " align="center" > ';
                            echo '<img style="width:150px; height:175px;" class="img-rounded img-responsive" src="data:image/jpeg;base64,'.base64_encode( $doc_row['Driving_License'] ).'"/>';
                            
                            echo '</div>';
                            echo "</div>"; 

                        }
                    ?>  
                </div>
            </form>  
        </div>
        <br/>    <hr>

        <h3>Aadhar</h3>  
        <br/>
        <div class="col-md-12">  
            <form method="post" action="Aadhar_Backend.php" enctype="multipart/form-data">  
                <input type="file" class="col-md-4" name="Aadhar" id="image"/>
                <div class="col-md-6">
                   <?php
                        if($aadhar_img==null){
                            echo"<input  type='submit' id='insert' value='Upload' class='btn btn-info' />";
                        }
                        else{
                            echo "<div class='col-md-12'>";
                            echo "<input  type='submit' value='Submitted' name='View_Passport' class='btn btn-success' class='View_File' class='col-md-2' />";
                            echo '<div class="col-md-3 col-lg-3 " align="center" > ';
                            echo '<img style="width:150px; height:175px;" class="img-rounded img-responsive" src="data:image/jpeg;base64,'.base64_encode( $doc_row['Aadhar'] ).'"/>';
                            
                            echo '</div>';
                            echo "</div>"; 

                        }
                    ?>    
                </div>
            </form>  
        </div>
        <br/>    <hr>

        <h3>Transcript</h3>  
        <br/>
        <div class="col-md-12">  
            <form method="post" action="Transcript_Backend.php" enctype="multipart/form-data">  
                <input type="file" class="col-md-4" name="Transcript" id="image"/>
                <div class="col-md-6">
                   <?php
                        if($transcript_img==null){
                            echo"<input  type='submit' id='insert' value='Upload' class='btn btn-info' />";
                        }
                        else{
                            echo "<div class='col-md-12'>";
                            echo "<input  type='submit' value='Submitted' name='View_Passport' class='btn btn-success' class='View_File' class='col-md-2' />";
                            echo '<div class="col-md-3 col-lg-3 " align="center" > ';
                            echo '<img style="width:150px; height:175px;" class="img-rounded img-responsive" src="data:image/jpeg;base64,'.base64_encode( $doc_row['Transcript'] ).'"/>';
                            
                            echo '</div>';
                            echo "</div>"; 

                        }
                    ?>   
                </div>
            </form>  
        </div>
        <br/>    <hr>

        <h3>Pancard</h3>  
        <br/>
        <div class="col-md-12">  
            <form method="post" action="Pan_Card_Backend.php" enctype="multipart/form-data">  
                <input type="file" class="col-md-4" name="Pan_Card" id="image"/>
                <div class="col-md-6">
                   <?php
                        if($pan_card_img==null){
                            echo"<input  type='submit' id='insert' value='Upload' class='btn btn-info' />";
                        }
                        else{
                            echo "<div class='col-md-12'>";
                            echo "<input  type='submit' value='Submitted' name='View_Passport' class='btn btn-success' class='View_File' class='col-md-2' />";
                            echo '<div class="col-md-3 col-lg-3 " align="center" > ';
                            echo '<img style="width:150px; height:175px;" class="img-rounded img-responsive" src="data:image/jpeg;base64,'.base64_encode( $doc_row['Pan_Card'] ).'"/>';
                            
                            echo '</div>';
                            echo "</div>"; 

                        }
                    ?>  
                </div>
            </form>  
        </div>
        <br/>    <hr>

        <h3>Bank Passbook</h3>  
        <br/>
        <div class="col-md-12">  
            <form method="post" action="Bank_Passbook_Backend.php" enctype="multipart/form-data">  
                <input type="file" class="col-md-4" name="Bank_Passbook" id="image"/>
                <div class="col-md-6">
                   <?php
                        if($bank_passbook_img==null){
                            echo"<input  type='submit' id='insert' value='Upload' class='btn btn-info' />";
                        }
                        else{
                            echo "<div class='col-md-12'>";
                            echo "<input  type='submit' value='Submitted' name='View_Passport' class='btn btn-success' class='View_File' class='col-md-2' />";
                            echo '<div class="col-md-3 col-lg-3 " align="center" > ';
                            echo '<img style="width:150px; height:175px;" class="img-rounded img-responsive" src="data:image/jpeg;base64,'.base64_encode( $doc_row['Bank_Passbook'] ).'"/>';
                            
                            echo '</div>';
                            echo "</div>"; 

                        }
                    ?>    
                </div>
            </form>  
        </div>
    
	
</body>
</html>