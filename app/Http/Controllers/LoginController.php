<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
		return view('frontView.home.login');
	}

	public function get_logged_in(Request $request){
		$email = $request->input('email');
		$password = $request->input('password');
		$raw = \DB::table('users')->where('email','=', $email )->get();//pluck('password');

		//$mainpass = \DB::table('users')->where('email','=',$email )->get();
		//echo $mainpass[0]->email;
		//$mainpasd= $mainpass->get()->first();
		//echo $mainpass->password;

		$mainpass=$raw[0]->password;

		//echo $password." ".$mainpass;
		if($password == $mainpass )
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
				//$request->session()->put('email',\DB::table('users')->where('email', $email )->pluck('password'));
				return view('frontView.home.users_view');
			}
	}

	public function logout(Request $request){
		$request->session()->flush();
		return view('frontView.home.login');
	}	
}
