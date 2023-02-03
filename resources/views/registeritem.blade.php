@extends('master')
@section('content')

<div class="dropdown" style="float:right;">
	<!-- Button trigger modal -->
	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
	  Add Item
	</button>
	</div>
	<br>
	<br>
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog"  >
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title"  id="exampleModalLabel">Insert Item Details</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  <div class="modal-body">
		  
			<form action="/itemdata/create" method="POST">
			{{csrf_field()}}
			<div class="mb-3">
				<label for="exampleInputID" class="form-label">Item ID</label>
				<input name="ItemID" type="text" class="form-control" id="exampleInputID" placeholder="Enter Item ID Number">
			  </div>
			  <div class="mb-3">
				<label for="exampleInputDetail" class="form-label">Item Details</label>
				<input name="Details" type="text" class="form-control" id="exampleInputDetails" placeholder="Enter Item Details">
			  </div>
			  <div class="mb-3">
				<label for="exampleInputType" class="form-label">Type</label>
				<input name="Type" type="text" class="form-control" id="exampleInputType" placeholder="Enter Item Type">
			  </div>
			  <div class="mb-3">
				<label for="exampleInputAmount" class="form-label">Amount</label>
				<input name="Amount" type="number" class="form-control" id="exampleInputAmount" placeholder="Enter Item Amount">
			  </div>
			  <div class="mb-3">
				<label for="exampleInputVendorID" class="form-label">Vendor ID</label>
				<input name="VendorID" type="text" class="form-control" id="exampleInputVendorIDID" placeholder="Enter Vendor ID">
			  </div>
			  <div class="mb-3">
				<label for="exampleInputlocation" class="form-label">Location</label>
				<input name="location" type="text" class="form-control" id="exampleInputlocation" placeholder="Enter Item Location">
			  </div>
		
			
			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-primary">Add Item</button>
			</form>
		  </div>
		</div>
	  </div>
	</div>

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
	</tr>
  </thead>
  <tbody style="background-color: #E6E6FA;" >
	@foreach($mydata as $item)
	<tr>
	<td style="text-align:center;">{{$item -> ItemID}}</td>
	<td style="text-align:center;">{{$item -> Details}}</td>
	<td style="text-align:center;">{{$item -> Type}}</td>
	<td style="text-align:center;">{{$item -> Amount}}</td>
	<td style="text-align:center;">{{$item -> VendorID}}</td>
	<td style="text-align:center;">{{$item -> location}}</td>


	</tr>
	@endforeach
	
  </tbody>
</table>


@endsection