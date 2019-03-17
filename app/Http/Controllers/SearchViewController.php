<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchViewController extends Controller
{
    public function search_view(){
		return view('frontView.home.search_view');
	}
}
