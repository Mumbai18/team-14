@extends('layouts.app')

@section('content')

   
      <div class="container">
         <div id="accordion">
         <form method="POST" action="updateFirstStatus"> 
         {{ csrf_field() }}
         @foreach ($studentdetails as $sd)
            <div class="card">
               <div class="card-header" id="headingOne">
                  <h5 class="mb-0">
                      <label><input type="checkbox" name="statuses[]" value="{{$sd->id}}"></label>

                     <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" onclick="collapse()">

                     {{ $sd->firstName }} {{ $sd->lastName }} {{ $sd->age }} {{ $sd->dob }} {{ $sd->gender }} 

                     </button>
                  </h5>
               </div>
               <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                     <table class="table table-bordered data-table">
                        <tbody>
                           <tr>
                              <td width="5%">
                                 <div class="checkbox" style="padding-left: 15px">
                                 </div>
                              </td>
                              <td align="center">
                              Class: {{ $sd->class }}<br>
                              Family Income: {{ $sd->totalFamilyIncome }}<br>
                              Total Family members:{{ $sd->totalNoOfMembers }}<br>
                              Total Budget: {{ $sd->totalBurden }}<br>
                              </td>
                              <td width="30%" align="center">
                                 Application Pending
                              </td>
                              
                           </tr>
                           
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
            @endforeach

            <button type="submit" class="btn btn-success pull-right">Success</button>
            </form>
         </div>
       
         
      </div>
   
</html>
@endsection

<script type="text/javascript">
  function collapse(){
  var x = document.getElementById("collapseOne");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
  }
</script>