<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\item;

class stockcontroller extends Controller
{
    public function abc(){
		$mydata= item::all();
		return view('manageitem',['mydata'=>$mydata]);
	
	}
	public function cde(){
		$mydata= item::all();
		return view('registeritem',['mydata'=>$mydata]);
	
	}
	public function efg(){
		$mydata= item::all();
		return view('staffrequest',['mydata'=>$mydata]);
	
	}
	public function edit($id){
		$mydata= \App\Models\item::find($id);
		return view('edit',['mydata'=>$mydata]);
	}
	public function update(Request $request, $id)
	{
		$mydata= item::find($id);
		$mydata-> update($request->all());
		return redirect('Display')->with('success','Data Updated');
	}
	public function delete($id)
	{
		$mydata = \App\Models\item::find($id);
		$mydata-> delete($mydata);
		return redirect('Display')->with('success','Data Deleted');
	}
	public function create(Request $request){
		\App\Models\item::create($request ->all());
		return redirect('Add')->with('success','New Data Insert');
	}
}
