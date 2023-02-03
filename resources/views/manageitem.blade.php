@extends('master')
@section('content')

@if(session('success'))
	<div class ="alert alert-success" role="alert">
	{{session('success')}}
	</div>
@endif
<table class="table table-hover table-bordered" style="border: 2px solid grey;">
  <thead class="table-primary">
  <tr style="text-align:center;">
	<th>Item ID</th>
    <th>Item Details</th>
	<th>Type</th>
	<th>Amount</th>
	<th>VendorID</th>
	<th>Location</th>
	<th></th>
	</tr>
  </thead>
  <tbody style="background-color: #E6E6FA;" >
	@foreach($mydata as $itemr)
	<tr>
	<td style="text-align:center;">{{$itemr -> ItemID}}</td>
	<td style="text-align:center;">{{$itemr -> Details}}</td>
	<td style="text-align:center;">{{$itemr -> Type}}</td>
	<td style="text-align:center;">{{$itemr -> Amount}}</td>
	<td style="text-align:center;">{{$itemr -> VendorID}}</td>
	<td style="text-align:center;">{{$itemr -> location}}</td>
	<td><center><button><a href="item/{{$itemr->id}}/edit">Edit</a></button>
	<button><a href="item/{{$itemr->id}}/delete" onClick="return confirm('Confirm Delete?')">Delete</a></button></td>
	</center>
	</tr>
	@endforeach
	
  </tbody>
</table>


@endsection