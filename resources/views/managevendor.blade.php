@extends('master')
@section('content')

<div class="dropdown" style="float:right;">
	<!-- Button trigger modal -->
	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
	  Add Vendor
	</button>
	</div>
	<br>
	<br>
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog"  >
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title"  id="exampleModalLabel">Insert Vendor Details</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  <div class="modal-body">
		  
			<form action="/vendordata/create" method="POST">
			{{csrf_field()}}
			<div class="mb-3">
				<label for="InputID" class="form-label">Vendor ID</label>
				<input name="VID" type="text" class="form-control" id="eInputID" placeholder="Enter Vendor ID">
			  </div>
			  <div class="mb-3">
				<label for="InputDetail" class="form-label">Vendor Name</label>
				<input name="VName" type="text" class="form-control" id="InputDetails" placeholder="Enter Vendor Name">
			  </div>
			  <div class="mb-3">
				<label for="InputType" class="form-label">Vendor Address</label>
				<input name="VAddress" type="text" class="form-control" id="InputType" placeholder="Enter Vendor Address">
			  </div>
			  <div class="mb-3">
				<label for="InputAmount" class="form-label">Vendor Phone</label>
				<input name="VPhone" type="text" class="form-control" id="InputAmount" placeholder="Enter Vendor Phone">
			  </div>
			  <div class="mb-3">
				<label for="InputVendorID" class="form-label">Vendor Email</label>
				<input name="VEmail" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Vendor Address">
		</div>
			
			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-primary">Add Vendor</button>
			<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
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
	<th>Vendor ID</th>
    <th>Vendor Name</th>
	<th>Vendor Address</th>
	<th>Vendor Phone</th>
	<th>Vendor Email</th>
	<th></th>
	</tr>
  </thead>
  <tbody style="background-color: #E6E6FA;" >
	@foreach($vendor_data as $vendor)
	<tr>
	<td style="text-align:center;">{{$vendor ->VID}}</td>
	<td style="text-align:center;">{{$vendor ->VName}}</td>
	<td style="text-align:center;">{{$vendor ->VAddress}}</td>
	<td style="text-align:center;">{{$vendor ->VPhone }}</td>
	<td style="text-align:center;">{{$vendor ->VEmail}}</td>
	<td>
	<center><button><a href="vendordata/{{$vendor->id}}/edit">Edit</a></button>
	<button><a href="vendordata/{{$vendor->id}}/delete" onClick="return confirm('Confirm Delete?')">Delete</a></button>
	</center>
	</td>


	</tr>
	@endforeach
	
  </tbody>
</table>


@endsection