<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(){
		return view('frontView.home.register');
	}

	public function insert(Request $request) {
      $firstname = $request->input('firstname');
      $lastname = $request->input('surname');
      $email = $request->input('email');
      $password = $request->input('password');
      $division = $request->division;
      $weight = $request->input('weight');
      $number = $request->input('phone');
      $DOB = $request->input('DOB');
      $bloodgroup = $request->bloodgroup;
      $lastdonate=NULL;
      $checkmark=$request->current_status;
      if($checkmark=="yes")
         $lastdonate=$request->input('lastdonate');
      $gender=$request->gender;
      \DB::table('users')->insert([
    	['fname' => $firstname, 'lname' => $lastname, 'email'=>$email, 'password'=>$password,'division'=>$division, 'weight'=>$weight, 'number'=>$number, 'DOB'=>$DOB, 'lastdonate'=>$lastdonate, 'bloodgroup'=>$bloodgroup, 'gender'=>$gender ]
	]);
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/insert">Click Here</a> to go back.';
   }
}
