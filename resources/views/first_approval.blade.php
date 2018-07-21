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
<body>

<div class="container">
  <h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
  <table class="table table-bordered data-table">    
    <tbody>
      <tr>
        <td width="5%">
          <div class="checkbox" style="padding-left: 15px">
            <label><input type="checkbox" value=""></label>
          </div>
        </td>
        <td width="50%" align="center">John</td>
        <td width="30%" align="center">
          Application Pending
        </td>
        <td width="5%">
        <button type="button" class="btn btn-primary pull-right widget-title bg_lo" data-toggle="collapse" data-target="#collapseExample">+</button>
        <span class="icon"> <i class="icon-chevron-down"></i> </span>
        <div id="demo" class="collapse" class="col-md-12">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>   
      </td>
      </tr>   

    </tbody>
    
  </table>
  <div class="collapse" id="collapseExample">
  <div class="card card-body">
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  </div>
</div>

  <button type="button" class="btn btn-success pull-right">Success</button>
</div>



</body>
</html>
