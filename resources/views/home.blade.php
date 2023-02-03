@extends('layouts.app')
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		
        <title>IMS</title>
		
		<style>
		body {
		  background-image: url('https://i.pinimg.com/236x/99/a7/31/99a7319cdcab3c1d22bb20245e698ae1.jpg');
			
		}
			.dropbtn {
			  background-color: #FFFACD;
			  color: black;
			  font-weight: bold;
			  padding: 10px;
			  padding-left: 25px;
			  padding-right: 25px;
			  font-size: 15px;
			  border-style: 2px outset;
			  cursor: pointer;
			}

			.dropdown {
			  position: relative;
			  display: inline-block;
			}

			.dropdown-content {
			  display: none;
			  position: absolute;
			  right: 0;
			  background-color: #f9f9f9;
			  min-width: 160px;
			  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			  z-index: 1;
			}

			.dropdown-content a {
			  color: black;
			  background-color: #FFF8DC;
			  padding: 10px 16px;
			  text-decoration: none;
			  border: 1px solid black;
			  display: block;
			}

			.dropdown-content a:hover {background-color: #f1f1f1;}

			.dropdown:hover .dropdown-content {
			  display: block;
			}

			.dropdown:hover .dropbtn {
			  background-color: #F5DEB3;
			}
		</style>

    </head>
    <body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#004d4d">
		<div class="container-fluid">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			<a class="navbar-brand">
			<img src="https://icon-library.com/images/0892cdca9c.svg.svg" alt="" width="40" height="34" class="d-inline-block align-text-top">
			<center><a class="navbar-brand" style="color: white;font-style: oblique;font-weight: bold;font-size:25px;" >Inventory Management System</a>
			</a></center>
		</div>
		</div>
</nav>

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
