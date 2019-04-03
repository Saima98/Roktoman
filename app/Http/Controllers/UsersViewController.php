<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use\App\User;

class UsersViewController extends Controller
{
    public function users_view(Request $request){
    	if($request->session()->has('email'))
			return view('frontView.home.users_view');
		else
			return view('frontView.home.login');
	}
	
	public function update(Request $request){
      
	  \DB::table('users')
            ->where('email', $request->email)
            ->update(['fname' => $request->fname,'lname' => $request->lname,'number' => $request->tel,'division' => $request->division, 'weight'=> $request->weigth,'lastdonate' => $request->last_donate]);
		return redirect()->back()->with('message','data updated');
    }
}
