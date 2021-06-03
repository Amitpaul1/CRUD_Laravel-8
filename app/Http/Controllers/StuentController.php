<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StuentController extends Controller
{
    public function index(){
		$student=Student::get();
		return view('welcome',compact('student'));
		
	}
	
	public function adddata(Request $request){
		
		$request->validate([
		
		'name' => 'required',
		'dep' => 'required',
		'uid' => 'required',
		
		
		],[
		
		'name.required' => 'Please Input Your Name',
		'dep.required' => 'Please Input Your Department',
		'uid.required' => 'Please Input Your University ID',
		
		
		]);
		
		
	Student::insert([
		'name' => $request->name,
		'department' => $request->dep,
		'uid' => $request->uid,
		
		]);
		
		return redirect()->back()->with ('success','Successfully Student Added');
	}
	
	public function edit($id){
		$student=Student::findOrFail($id);
		return view('update',compact('student'));
	}
	
	public function update(Request $request,$id){
		
		Student::findOrFail($id)->update([
		
		'name' => $request->name,
		'department' => $request->dep,
		'uid' => $request->uid,
		
		
		]);
		
		return redirect()->to('/')->with('update','Successfully Student Updated');
		
	}
	
	
	public function delete($id){
		Student::findOrFail($id)->delete();
		
				return redirect()->back()->with('Delete','Successfully Student Remove');

	}
	
	
	
}
