<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(){
		return view('frontView.home.login');
	}

	public function get_logged_in(Request $request){

		$email = $request->input('email');
		$password = $request->input('password');
		$raw = \DB::table('users')->where('email','=', $email )->get();

		$raw_count = \DB::table('users')->where('email','=', $email )->count();
		if($raw_count==0)
			return view('frontView.home.login');
		$mainpass=$raw[0]->password;

		if(Hash::check($password, $mainpass))
			{
				$request->session()->put('email',$email);
				$request->session()->put('fname',$raw[0]->fname);
				$request->session()->put('lname',$raw[0]->lname);
				$request->session()->put('weight',$raw[0]->weight);
				$request->session()->put('DOB',$raw[0]->DOB);
				$request->session()->put('lastdonate',$raw[0]->lastdonate);
				$request->session()->put('number',$raw[0]->number);
				$request->session()->put('division',$raw[0]->division);
				$request->session()->put('bloodgroup',$raw[0]->bloodgroup);
				$request->session()->put('gender',$raw[0]->gender);
				if($raw[0]->adminship!=1)
					return view('frontView.home.users_view');
				else
					return view('frontView.home.admin_view');
			}
		else
			return view('frontView.home.login');
	}

	public function logout(Request $request){
		$request->session()->flush();
		return view('frontView.home.homeContent');
	}	
}
