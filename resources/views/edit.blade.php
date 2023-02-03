@extends('master')
@section('content')

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

<h1>Edit Item Details</h1>

<div style="border: 3px solid #4682b4;background-color: #FFFAF0;padding:10px;">

@if(session('success'))
	<div class ="alert alert-success" role="alert">
	{{session('success')}}
	</div>
@endif
<form action="/item/{{$mydata->id}}/update" method="POST">
			{{csrf_field()}}
			<div class="mb-3">
				<label for="exampleInputID" class="form-label">Item ID</label>
				<input name="ItemID" type="text" class="form-control" id="exampleInputID" placeholder="Enter Item ID Number" value="{{$mydata->ItemID}}">
			  </div>
			  <div class="mb-3">
				<label for="exampleInputDetail" class="form-label">Item Details</label>
				<input name="Details" type="text" class="form-control" id="exampleInputDetails" placeholder="Enter Item Details" value="{{$mydata->Details}}">
			  </div>
			  <div class="mb-3">
				<label for="exampleInputType" class="form-label">Type</label>
				<input name="Type" type="text" class="form-control" id="exampleInputType" placeholder="Enter Item Type" value="{{$mydata->Type}}">
			  </div>
			  <div class="mb-3">
				<label for="exampleInputAmount" class="form-label">Amount</label>
				<input name="Amount" type="number" class="form-control" id="exampleInputAmount" placeholder="Enter Item Amount" value="{{$mydata->Amount}}">
			  </div>
			  <div class="mb-3">
				<label for="exampleInputVendorID" class="form-label">Vendor ID</label>
				<input name="VendorID" type="text" class="form-control" id="exampleInputVendorID" placeholder="Enter Vendor ID" value="{{$mydata->VendorID}}">
			  </div>
			  <div class="mb-3">
				<label for="exampleInputlocation" class="form-label">Location</label>
				<input name="location" type="text" class="form-control" id="exampleInputlocation" placeholder="Enter Item Location" value="{{$mydata->location}}">
			  </div>
		
			
			
		  </div>
		  <div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><a href="/Display">Close</a></button>
			<button type="submit" class="btn btn-primary">Update</button>
</form>

</div>

@endsection
