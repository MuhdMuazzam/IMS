@extends('master')
@section('content')

<title>Grades</title>

<style>

table, th, td
{
  border: 3px solid black;
  border-collapse: collapse;
  padding: 10px;
}

th
{
  background-color: Crimson;
  color: white;
}
td
{
  background-color: MistyRose;
  color: black;
}

input[type=button] 
{
  background-color: green;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  display: inline;
}

input[type=button]:hover 
{
  background-color: #84e184;
}

h1
{
   font-family: Monaco;
   font-size: 46px; 
   text-align: center; 
   color: black;
}

</style>

<h1>Edit Vendor Details</h1>

<div style="border: 3px solid #4682b4;background-color: #FFFAF0;padding:10px;">

@if(session('success'))
	<div class ="alert alert-success" role="alert">
	{{session('success')}}
	</div>
@endif

	<form action="/vendordata/{{$vendor_data->id}}/update" method="POST">
			{{csrf_field()}}
			<div class="mb-3">
				<label for="InputID" class="form-label">Vendor ID</label>
				<input name="VID" type="text" class="form-control" id="eInputID" placeholder="Enter Vendor ID" value="{{$vendor_data->VID}}">
			  </div>
			 <div class="mb-3">
				<label for="InputDetail" class="form-label">Vendor Name</label>
				<input name="VName" type="text" class="form-control" id="InputDetails" placeholder="Enter Vendor Name" value="{{$vendor_data->VName}}">
			  </div>
			  <div class="mb-3">
				<label for="InputType" class="form-label">Vendor Address</label>
				<input name="VAddress" type="text" class="form-control" id="InputType" placeholder="Enter Vendor Address" value="{{$vendor_data->VAddress}}">
			  </div>
			  <div class="mb-3">
				<label for="InputAmount" class="form-label">Vendor Phone</label>
				<input name="VPhone" type="text" class="form-control" id="InputAmount" placeholder="Enter Vendor Phone" value="{{$vendor_data->VPhone}}">
			  </div>
			  <div class="mb-3">
				<label for="InputVendorID" class="form-label">Vendor Email</label>
				<input name="VEmail" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Customer Email" value="{{$vendor_data->VEmail}}">
				<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
			  </div>
		
			
			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><a href="/vendor">Close</a></button>
			<button type="submit" class="btn btn-primary">Update</button>
</form>

</div>


@endsection