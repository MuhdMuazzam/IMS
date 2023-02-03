<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\book;

class requestcontrol extends Controller
{
    public function create(Request $request){
		\App\Models\book::create($request ->all());
		return redirect('book')->with('success','Request Succesful');
	}	
	
	 public function abc(){
		$mydata= book::all();
		return view('managerequest',['mydata'=>$mydata]);
	
	}
	public function edit($id){
		$mydata= \App\Models\book::find($id);
		return view('editrequest',['mydata'=>$mydata]);
	}
	public function update(Request $request, $id)
	{
		$mydata= book::find($id);
		$mydata-> update($request->all());
		return redirect('managebook')->with('success','Data Updated');
	}
	public function delete($id)
	{
		$mydata = \App\Models\book::find($id);
		$mydata-> delete($mydata);
		return redirect('managebook')->with('success','Data Deleted');
	}
}
