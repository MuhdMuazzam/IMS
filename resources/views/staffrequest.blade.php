@extends('master')
@section('content')
	<br>
	<center>
<div class="dropdown" style="float:center;">
	<button type="button"  style="width:400px;"class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
	  Request Item
	</button>
	</div>
	</center>
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
		  
			<form action="/book/create" method="POST">
			{{csrf_field()}}
			<div class="mb-3">
				<label for="exampleInputID" class="form-label">Staff ID</label>
				<input name="StaffID" type="text" class="form-control" id="exampleInputID" placeholder="Enter Staff ID">
			  </div>
			  <div class="mb-3">
				<label for="exampleInputDetail" class="form-label">Item ID</label>
				<input name="ItemID" type="text" class="form-control" id="exampleInputDetails" placeholder="Enter Item ID">
			  </div>
			  <div class="mb-3">
				<label for="exampleInputType" class="form-label">Quantity</label>
				<input name="RQuantity" type="number" class="form-control" id="exampleInputType" placeholder="Enter Item Quantity">
			  </div>
			  <div class="mb-3">
				<label for="exampleInputAmount" class="form-label">Date</label>
				<input name="RDate" type="date" class="form-control" id="exampleInputAmount" placeholder="Enter Request Date">
			  </div>
			  <div class="mb-3">
				<label for="exampleInputVendorID" class="form-label">Comment</label>
				<input name="Commnent" type="text" class="form-control" id="exampleInputVendorIDID" placeholder="Comment">
			  </div>
			  <div class="mb-3">
				<label for="exampleInputlocation" class="form-label">Status</label>
				<input name="Status" type="text" class="form-control" id="exampleInputlocation" value="Pending" readonly="readonly">
			  </div>
		
			
			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-primary">Request Item</button>
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

<h1 style="text-align:center;color:white;">Available Items</h1>
<table class="table table-hover table-bordered" style="border: 2px solid grey;">
  <thead class="table-primary">
  <tr style="text-align:center;">
	<th>Item ID</th>
    <th>Item Details</th>
	<th>Type</th>
	<th>Amount</th>
	</tr>
  </thead>
  <tbody style="background-color: #E6E6FA;" >
	@foreach($mydata as $itemr)
	<tr>
	<td style="text-align:center;">{{$itemr -> ItemID}}</td>
	<td style="text-align:center;">{{$itemr -> Details}}</td>
	<td style="text-align:center;">{{$itemr -> Type}}</td>
	<td style="text-align:center;">{{$itemr -> Amount}}</td>
	</tr>
	@endforeach
	
  </tbody>
</table>


@endsection