<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakePostController extends Controller
{
    public function makepost(){
		return view('frontView.home.makepost');
	}
}
