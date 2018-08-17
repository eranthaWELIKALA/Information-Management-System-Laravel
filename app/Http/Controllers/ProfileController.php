<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class ProfileController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function indexProfile(){
    	return view('profile.index');
    }

    public function viewProfileByAdmission(Request $request){
    	$sUser = User::whereAdmission($request->sAdmission)->first();
    	if($sUser==null){
    		return view('profile.view');
    	} 
    	return view('profile.view',compact('sUser'));
    }

    public function viewProfileByFirstname(Request $request){
    	$sUser = User::whereFirstname($request->sFirstname)->first(); 
    	return view('profile.view',compact('sUser'));
    }

    public function viewProfileByLastname(Request $request){
    	$sUser = User::whereLastname($request->sLastname)->first();
    	return view('profile.view',compact('sUser')); 
    }

    public function showProfile($admission){
    	$user = User::whereAdmission($admission)->first();       
    	return view('profile.profile',compact('user'));
    }

    public function editProfile($admission){
    	$user = User::whereAdmission($admission)->first(); 
    	return view('profile.edit',compact('user'));
    }

    public function updateProfile(Request $request,$admission){
    	$user = User::whereAdmission($admission)->first();
    	$user->update([
    		'firstname' => $request->firstname,
    		'lastname' => $request->lastname,
    		'status' => $request->status,
    		'occupation' => $request->occupation,
    		'address' => $request->address,
    		'mobile' => $request->mobile,
    		'landline' => $request->landline,
    		'email' => $request->email,
    	]);
    	//return $user->admission;
    	return view('profile.profile',compact('user'));
    }
}
