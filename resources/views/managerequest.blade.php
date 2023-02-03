@extends('master')
@section('content')
	<br>
	<center>


@if(session('success'))
	<div class ="alert alert-success" role="alert">
	{{session('success')}}
	</div>
@endif

<h1 style="text-align:center;color:white;">Request Lists</h1>
<table class="table table-hover table-bordered" style="border: 2px solid grey;">
  <thead class="table-primary">
  <tr style="text-align:center;">
	<th>Staff ID</th>
    <th>Item ID</th>
	<th>Quantity</th>
	<th>Date</th>
	<th>Comment</th>
	<th>Status</th>
	<th></th>
	</tr>
  </thead>
  <tbody style="background-color: #E6E6FA;" >
	@foreach($mydata as $itemr)
	<tr>
	<td style="text-align:center;">{{$itemr -> StaffID}}</td>
	<td style="text-align:center;">{{$itemr -> ItemID}}</td>
	<td style="text-align:center;">{{$itemr -> RQuantity}}</td>
	<td style="text-align:center;">{{$itemr -> RDate}}</td>
	<td style="text-align:center;">{{$itemr -> Commnent}}</td>
	<td style="text-align:center;">{{$itemr -> Status}}</td>
	<td>
	<center><button><a href="/book/{{$itemr->id}}/edit">Edit</a></button>
	<button><a href="/book/{{$itemr->id}}/delete" onClick="return confirm('Confirm Delete?')">Delete</a></button>
	</center>
	</td>
	
	
	
	</tr>
	@endforeach
	
  </tbody>
</table>


@endsection