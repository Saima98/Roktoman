<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakePostController extends Controller
{
    public function makepost(){
		return view('frontView.home.makepost');
	}

	public function createpost(Request $request)
	{
		$name = $request->input('name');
		$number = $request->input('number');
		$division = $request->division;
		$bloodgroup = $request->bloodgroup;
		$address = $request->input('address');
		$message = $request->input('message');

		\DB::table('bloodrequests')->insert([
    	['name'=>$name, 'number'=>$number, 'message'=>$message , 'address'=>$address, 'bloodgroup'=>$bloodgroup, 'division'=>$division]
	]);
	}
}
