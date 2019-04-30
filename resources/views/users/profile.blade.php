<!DOCTYPE html>
<html>
<head>
	<title>profile</title>
</head>
<body>
@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		
		<div class="col-md-4">
			<div style="border:1px solid white; padding: 8px;">
			<h2 style="text-align: center; font-weight: bold;text-transform: uppercase;  font-size: 23px; padding-bottom: 10px;">My Info</h2>
			@if ($users)
				@foreach ($users as $user)
				<td><strong>Name: </strong>{{$user->name}}</td><br>
				<td><strong>Email: </strong>{{$user->email}}</td>
				@endforeach
			@endif

		</div>

		  <div  style="border:1px solid white; padding: 8px;">

                
                            <h2 style="text-align: center; font-weight: bold;text-transform: uppercase; font-size: 23px;">Total calculation</h2>
                            @if ($totalIncome)
                             <tr>  <td>Total Income: {{$totalIncome}} tk</td></tr> <br>
                            @endif
                          @if ($totalCost)
                          <tr> <td>Total cost:{{$totalCost}} tk</td></tr> 
                          @endif
                             {{-- <hr> --}}
                             <br>
                             @if ($balence)
                               <td>Total Balence: {{$balence}} tk</td>
                             @endif
                             
                        </div>
		</div>
		<div class="col-md-8" >
<h2 style="text-align: center; font-weight: bold;text-transform: uppercase;  font-size: 23px; padding-bottom: 10px;">your income & cost in details</h2>
<div class="table-responsive" style="padding-left: 10%;padding-right: 10%;">
	<table class="table table-bordered table-hover " >
  <thead>
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Imcome</th>
      <th scope="col">Cost Type</th>
      <th scope="col">Cost(tk)</th>
    </tr>
  </thead>
  @if ($data)
		
  <tbody style="color: white;">
		@foreach ($data as $Tdata)
    <tr>
      <th scope="row">{{date('d-m-Y',strtotime($Tdata->created_at))}}</th>
      <td>{{$Tdata->income}}</td>
      <td>{{$Tdata->costName}}</td>
      <td>{{$Tdata->cost}}</td>
    </tr>
     @endforeach
 
  </tbody>

	
</table>
</div>
<div style="text-align: center; padding-left: 10%; padding-top: 30px;">{{$data->links()}}</div>
	
	@endif
		</div>

	</div>
</div>
	@endsection

</body>
</html>