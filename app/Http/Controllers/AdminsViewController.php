<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminsViewController extends Controller
{
    /*public function admins_view(Request $request){
    	if($request->session()->has('email'))
			return view('frontView.home.admin_view');
		else
			return view('frontView.home.login');
	}*/
	public function admins_view(){
		return view('frontView.home.admin_view');
	}

	public function feedback_list(){
		$messages = \DB::table('comments')->get();

		return view('frontView.home.admin_view',compact('messages'));
	}
	//for user lists
	public function users_list(){
		$users = \DB::table('users')->get();

		return view('frontView.home.admin_view',compact('users'));
	}

}
