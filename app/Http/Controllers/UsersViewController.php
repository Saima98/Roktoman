<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersViewController extends Controller
{
    public function users_view(Request $request){
    	if($request->session()->has('email'))
			return view('frontView.home.users_view');
		else
			return view('frontView.home.login');
	}
}
