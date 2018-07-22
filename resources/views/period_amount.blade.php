@extends('layouts.app')

@section('content')

	<div>
		<form action="updatePeriodAmt" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
                                    <label for="period">Enter the tentative days within which donation is to be made</label>
                                    <div class="input-group pb-modalreglog-input-group">
                                        <input type="number" class="form-control" id="period" name="period" placeholder="Period in Days">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-calender"></span></span>
                                 </div>
                                 </div>
                                <div class="form-group">
                                    <label for="amount">Enter the amount needed in rupees</label>
                                    <div class="input-group pb-modalreglog-input-group">
                                        <input type="number" class="form-control" id="amountRequired" name="amountRequired" placeholder="Amount in Rupees">
                                        <span class="input-group-addon"><span class="fa fa-rupee"></span></span>
                                    </div>
                                </div>

                   				 <div class="form-group">
                                      <button style="float:left; margin-top: 20px;" type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
                                    </div>

                                </div>
                            </form>

<!-- new addition -->


<!-- end				  -->
	</div>
@endsection
