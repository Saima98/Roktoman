<?php

namespace App\Http\Controllers;
use App\SentMessage;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    //insert
    public function insert(Request $request){
        //dd($request->all());
		$email = $request->input('email');
		$message = $request->input('message');
        
		
		\DB::table('t_guest')->insert([
    	['email'=>$email, 'message'=>$message]
	]);
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/insert">Click Here</a> to go back.';
    }
}
