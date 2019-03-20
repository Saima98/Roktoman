<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchViewController extends Controller
{
    public function search_view(Request $request){

    	$bloodtype=$request->bloodgroup;
    	$division=$request->division;

    	echo $bloodtype;
    	echo $division;

    	if($request->division==NULL)
    		echo "NULL";

    	$raw=\DB::table('users')->where('bloodgroup', '=', $bloodtype, 'AND', 'division', '=', $division)->get();

    	$count=count($raw);
    	echo $count;
    	
    	foreach ($raw as $data) {
    		echo $data->fname;
    		# code...
    	}
		//return view('frontView.home.search_view');
	}
}
