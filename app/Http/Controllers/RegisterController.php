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
      //$gender = $request->input('surname'); // This one waits
      $weight = $request->input('weight');
      $number = $request->input('phone');
      $DOB = $request->input('DOB');
      //$lastdonate = $request->input('lastdonate'); // This one waits
      $bloodgroup = $request->bloodgroup;
      //$gender = Input::get(gender);
      $gender=$request->gender; // This one waits
      
      //return $division;
      //DB::insert('insert into student (name) values(?)',[$name]);
      \DB::table('users')->insert([
    	['fname' => $firstname, 'lname' => $lastname, 'email'=>$email, 'password'=>$password,'division'=>$division, 'weight'=>$weight, 'number'=>$number, 'DOB'=>$DOB, 'bloodgroup'=>$bloodgroup, 'gender'=>$gender ]
	]);
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/insert">Click Here</a> to go back.';
   }
}
