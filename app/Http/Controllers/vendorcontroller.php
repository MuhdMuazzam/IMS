<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\vendor;

class vendorcontroller extends Controller
{
    public function abc(){
	$vendor_data=vendor::all();
	return view('managevendor',['vendor_data'=>$vendor_data]);
	}
	
	public function create(Request $request){
		\App\Models\vendor::create($request ->all());
		return redirect('vendor')->with('success','New Data Insert');
	}	
	
	public function edit($id){
		$vendor_data = \App\Models\vendor::find($id);
		return view('editvendor',['vendor_data'=>$vendor_data]);
	}
	
	public function update(Request $request, $id)
	{
		$vendor_data = vendor::find($id);
		$vendor_data -> update($request->all());
		return redirect('vendor')->with('success','Data Updated');
	}
	
	public function delete($id)
	{
		$vendor_data = \App\Models\vendor::find($id);
		$vendor_data-> delete($vendor_data);
		return redirect('vendor')->with('success','Data Deleted');
	}
}
