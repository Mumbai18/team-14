<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
  .collapsible {
    background-color: #777;
    color: white;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
}

.active, .collapsible:hover {
    background-color: #555;
}

.content {
    padding: 0 18px;
    display: none;
    overflow: hidden;
    background-color: #f1f1f1;
}
</style>
<script type="text/javascript">
  
  var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.display === "block") {
            content.style.display = "none";
        } else {
            content.style.display = "block";
        }
    });
}
</script>
<body>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Summary Page</h2>
  
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Personal Details</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body">
          <table class="table table-bordered data-table">    
    <tbody>
      <tr>
        <td width="50%" align="center">ID:</td>
        <td width="30%" align="center">
          Ans daalo
        </td>
      </tr> 

      <tr>
        <td width="50%" align="center">First Name:</td>
        <td width="30%" align="center">
          Ans daalo
        </td>
      </tr> 

      <tr>
        <td width="50%" align="center">Last Name:</td>
        <td width="30%" align="center">
          Ans daalo
        </td>
      </tr> 

      <tr>
        <td width="50%" align="center">Email ID:</td>
        <td width="30%" align="center">
          Ans daalo
        </td>
      </tr> 


      <tr>
        <td width="50%" align="center">Mobile No:</td>
        <td width="30%" align="center">
          Ans daalo
        </td>
      </tr> 

      <tr>
        <td width="50%" align="center">Landline:</td>
        <td width="30%" align="center">
          Ans daalo
        </td>
      </tr> 

      <tr>
        <td width="50%" align="center">Age:</td>
        <td width="30%" align="center">
          Ans daalo
        </td>
      </tr> 

      <tr>
        <td width="50%" align="center">DOB:</td>
        <td width="30%" align="center">
          Ans daalo
        </td>
      </tr> 

      <tr>
        <td width="50%" align="center">gender:</td>
        <td width="30%" align="center">
          Ans daalo
        </td>
      </tr> 

      <tr>
        <td width="50%" align="center">Class:</td>
        <td width="30%" align="center">
          Ans daalo
        </td>
      </tr>   


      <tr>
        <td width="50%" align="center">Stream:</td>
        <td width="30%" align="center">
          Ans daalo
        </td>
      </tr>   
      

      <tr>
        <td width="50%" align="center">Major:</td>
        <td width="30%" align="center">
          Ans daalo
        </td>
      </tr>   
      
      <tr>
        <td width="50%" align="center">Caste:</td>
        <td width="30%" align="center">
          Ans daalo
        </td>
      </tr>   
      
      <tr>
        <td width="50%" align="center">Current Address:</td>
        <td width="30%" align="center">
          Ans daalo
        </td>
      </tr>   
      

      <tr>
        <td width="50%" align="center">Pincode:</td>
        <td width="30%" align="center">
          Ans daalo
        </td>
      </tr>   
      

    <tr>
        <td width="50%" align="center">City:</td>
        <td width="30%" align="center">
          Ans daalo
        </td>
      </tr>   
      

      <tr>
        <td width="50%" align="center">State:</td>
        <td width="30%" align="center">
          Ans daalo
        </td>
      </tr>   
      
      <tr>
        <td width="50%" align="center">Father Name:</td>
        <td width="30%" align="center">
          Ans daalo
        </td>
      </tr>   
      
      <tr>
        <td width="50%" align="center">Father Contact:</td>
        <td width="30%" align="center">
          Ans daalo
        </td>
      </tr>   
      
      <tr>
        <td width="50%" align="center">Father EmailID:</td>
        <td width="30%" align="center">
          Ans daalo
        </td>
      </tr>   

      <tr>
        <td width="50%" align="center">Father Qualification:</td>
        <td width="30%" align="center">
          Ans daalo
        </td>
      </tr>   

      <tr>
        <td width="50%" align="center">Father Office Address:</td>
        <td width="30%" align="center">
          Ans daalo
        </td>
      </tr>   

      <tr>
        <td width="50%" align="center">Mother Name:</td>
        <td width="30%" align="center">
          Ans daalo
        </td>
      </tr>   

      <tr>
        <td width="50%" align="center">Mother Contact:</td>
        <td width="30%" align="center">
          Ans daalo
        </td>
      </tr> 

      <tr>
        <td width="50%" align="center">Mother EmailID:</td>
        <td width="30%" align="center">
          Ans daalo
        </td>
      </tr> 

      <tr>
        <td width="50%" align="center">Mother Qualification:</td>
        <td width="30%" align="center">
          Ans daalo
        </td>
      </tr> 

      <tr>
        <td width="50%" align="center">Mother Office Address:</td>
        <td width="30%" align="center">
          Ans daalo
        </td>
      </tr> 

      <tr>
        <td width="50%" align="center">Total Family Income:</td>
        <td width="30%" align="center">
          Ans daalo
        </td>
      </tr> 

      <tr>
        <td width="50%" align="center">Total Family Members:</td>
        <td width="30%" align="center">
          Ans daalo
        </td>
      </tr> 

      <tr>
        <td width="50%" align="center">Total Burden:</td>
        <td width="30%" align="center">
          Ans daalo
        </td>
      </tr> 

      <tr>
        <td width="50%" align="center">Educon ID:</td>
        <td width="30%" align="center">
          Ans daalo
        </td>
      </tr> 

    </tbody>
    
  </table>
  


        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Educational Details</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
          
 <table class="table table-bordered data-table">    
    <tbody>
      <tr>
        <td width="50%" align="center">ID:</td>
        <td width="30%" align="center">
          Ans daalo
        </td>
      </tr> 

      <tr>
        <td width="50%" align="center">User ID:</td>
        <td width="30%" align="center">
          Ans daalo
        </td>
      </tr> 

      <tr>
        <td width="50%" align="center">tenth result:</td>
        <td width="30%" align="center">
          Ans daalo
        </td>
      </tr> 

      <tr>
        <td width="50%" align="center">twelfth result:</td>
        <td width="30%" align="center">
          Ans daalo
        </td>
      </tr> 


      <tr>
        <td width="50%" align="center">father's Highest Qualification:</td>
        <td width="30%" align="center">
          Ans daalo
        </td>
      </tr> 

      <tr>
        <td width="50%" align="center">Mother's Highest Qualification:</td>
        <td width="30%" align="center">
          Ans daalo
        </td>
      </tr> 

    </tbody>
    
  </table>


        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Financial Details</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
          
          <table class="table table-bordered data-table">    
    <tbody>
      <tr>
        <td width="50%" align="center">ID:</td>
        <td width="30%" align="center">
          Ans daalo
        </td>
      </tr> 

      <tr>
        <td width="50%" align="center">User ID:</td>
        <td width="30%" align="center">
          Ans daalo
        </td>
      </tr> 

      <tr>
        <td width="50%" align="center">mother's Salary:</td>
        <td width="30%" align="center">
          Ans daalo
        </td>
      </tr> 

      <tr>
        <td width="50%" align="center">father's Salary:</td>
        <td width="30%" align="center">
          Ans daalo
        </td>
      </tr> 


      <tr>
        <td width="50%" align="center">father's Profession:</td>
        <td width="30%" align="center">
          Ans daalo
        </td>
      </tr> 

      <tr>
        <td width="50%" align="center">Mother's Profession:</td>
        <td width="30%" align="center">
          Ans daalo
        </td>
      </tr> 

    </tbody>
    
  </table>


        </div>
      </div>
    </div>
  <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Documents uploaded</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">
     <iframe id="iframepdf" src="a.pdf"></iframe>
     <iframe id="iframepdf" src="a.pdf"></iframe>
     <iframe id="iframepdf" src="a.pdf"></iframe>

    </div>
  
    </div>
</div>
    
</body>
</html>



