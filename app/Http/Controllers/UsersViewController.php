<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersViewController extends Controller
{
    public function users_view(){
		return view('frontView.home.users_view');
	}
}
