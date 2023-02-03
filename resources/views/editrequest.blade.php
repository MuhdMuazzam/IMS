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

	<form action="/book/{{$mydata->id}}/update" method="POST">
			{{csrf_field()}}
			<div class="mb-3">
				<label for="exampleInputID" class="form-label">Staff ID</label>
				<input name="StaffID" type="text" class="form-control" id="exampleInputID" placeholder="Enter Staff ID" value="{{$mydata->StaffID}}">
			  </div>
			  <div class="mb-3">
				<label for="exampleInputDetail" class="form-label">Item ID</label>
				<input name="ItemID" type="text" class="form-control" id="exampleInputDetails" placeholder="Enter Item ID" value="{{$mydata->ItemID}}">
			  </div>
			  <div class="mb-3">
				<label for="exampleInputType" class="form-label">Quantity</label>
				<input name="RQuantity" type="number" class="form-control" id="exampleInputType" placeholder="Enter Item Quantity" value="{{$mydata->RQuantity}}">
			  </div>
			  <div class="mb-3">
				<label for="exampleInputAmount" class="form-label">Date</label>
				<input name="RDate" type="date" class="form-control" id="exampleInputAmount" placeholder="Enter Request Date" value="{{$mydata->RDate}}">
			  </div>
			  <div class="mb-3">
				<label for="exampleInputVendorID" class="form-label">Comment</label>
				<input name="Commnent" type="text" class="form-control" id="exampleInputVendorIDID" placeholder="Comment" value="{{$mydata->Commnent}}">
			  </div>
			  <div class="mb-3">
				<label for="exampleInputlocation" class="form-label">Status</label>
				<input name="Status" type="text" class="form-control" id="exampleInputlocation" value="Pending">
			  </div>
		
			
			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><a href="/vendor">Close</a></button>
			<button type="submit" class="btn btn-primary">Update</button>
</form>




















</div>


@endsection