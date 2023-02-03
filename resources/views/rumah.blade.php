@extends('master')
@section('content')
<br>
<br>
		<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
		  <div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
		  </div>
		  <div class="carousel-inner">
			<div class="carousel-item active">
			  <img src="https://www.logisticsbureau.com/blog/wp-content/uploads/2012/05/Blog_What-is-Inventory.png" height="600" class="d-block w-100" alt="1">
			</div>
			<div class="carousel-item">
			  <img src="https://www.business.org/app/uploads/2021/08/why-is-inventory-management-important.png" height="600" class="d-block w-100" alt="2">
			</div>
			<div class="carousel-item">
			  <img src="https://dclcorp.com/wp-content/uploads/2019/10/Common-Inventory-Problems-hsm.jpg"  height="600" class="d-block w-100" alt="3">
			</div>
		  </div>
		  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		  </button>
		  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		  </button>
		</div>
		<br>
		<br>
		<br>
		
		<div class="card text-center">
		  <div class="card-header" style="color: white;font-weight: bold;font-size:40px;background-color: #006666;">
			Manage Your Item Effectively.
		  </div>
		  <div class="card-body" style="color: white;background-color:#00b3b3">
			<h5 class="card-title" style="font-weight: bold;font-size:20px;">About Inventory</h5>
			<br>
		
			<p class="card-text">Inventory Management System (IMS) is a system for a comppany to manage inventory in more a systematic way.
			This system will help client by reduce time spent for inventory administration to manage inventory system.</p>
			<br>

		  </div>
		  <div class="card-footer text-muted" style="color:black;background-color:white">
			© 2022 CB919077 Sdn. Bhd. All Rights Reserved.
		  </div>
		</div>
	
@endsection