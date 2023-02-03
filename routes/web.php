<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('rumah');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>['auth','checkAdmin','checkip']],function()
{
	Route::get('/rumah',function()
	{
		return view("rumah");
	}); 

	Route::get('Display','App\Http\Controllers\stockcontroller@abc');

	Route::get('Add','App\Http\Controllers\stockcontroller@cde');

	Route::post('/itemdata/create','App\Http\Controllers\stockcontroller@create');

	Route::get('/item/{id}/edit','App\Http\Controllers\stockcontroller@edit');

	Route::post('/item/{id}/update','App\Http\Controllers\stockcontroller@update');

	Route::get('/item/{id}/delete','App\Http\Controllers\stockcontroller@delete');

	Route::get('vendor','App\Http\Controllers\vendorcontroller@abc');

	Route::post('/vendordata/create','App\Http\Controllers\vendorcontroller@create');

	Route::get('/vendordata/{id}/edit','App\Http\Controllers\vendorcontroller@edit');

	Route::Post('/vendordata/{id}/update','App\Http\Controllers\vendorcontroller@update');

	Route::get('/vendordata/{id}/delete','App\Http\Controllers\vendorcontroller@delete');

	Route::get('managebook','App\Http\Controllers\requestcontrol@abc');

	Route::get('/book/{id}/edit','App\Http\Controllers\requestcontrol@edit');

	Route::Post('/book/{id}/update','App\Http\Controllers\requestcontrol@update');

	Route::get('/book/{id}/delete','App\Http\Controllers\requestcontrol@delete');
}); 

Route::group(['middleware'=>['auth','checkStaff','checkip']],function(){

	Route::get('/rumah',function(){
		return view("rumah");
	}); 
	
	Route::get('book','App\Http\Controllers\stockcontroller@efg');

	Route::post('/book/create','App\Http\Controllers\requestcontrol@create');
}); 
