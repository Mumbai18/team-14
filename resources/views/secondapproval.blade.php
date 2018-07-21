@extends('layouts.app')

@section('content')
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <label class="pull-right">Rs. 100</label>
    </ul>
  </div>
</nav>
<nav class="navbar navbar-default">
  <div class="container-fluid">    
      <label class="col-sm-3" style="text-align: center;">Engineering<br>100</label>
      <label class="col-sm-3" style="text-align: center;">Medical<br>100</label>
      <label class="col-sm-3" style="text-align: center;">CA<br>100</label>
      <label class="col-sm-3" style="text-align: center;">Others<br>100</label>    
  </div>
</nav>
<div class="container">
             
  <table class="table table-bordered data-table" style="text-align: center;">
    <thead>
      <tr>
        <th style="text-align: center;">Name</th>
        <th style="text-align: center;">Requested Amount</th>
        <th style="text-align: center;">Disbursed Amount</th>
        <th style="text-align: center;">Approval</th>
      </tr>
    </thead>
    <tbody>
    @foreach($allstudents as $stu)
      <tr>
        <td>{{ $stu->firstName }} {{ $stu->lastName }}</td>
        <td>{{ $stu->amountRequired }}</td>
        <td><input type="text" name=""></td>
        <td><button type="button" class="btn btn-success">Approve</button>
        <button type="button" class="btn btn-danger">Reject</button></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection


