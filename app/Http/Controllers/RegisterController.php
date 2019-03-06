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
      $division = $request->input('division');
      $gender = $request->input('surname'); // This one waits
      $weight = $request->input('weight');
      $number = $request->input('phone');
      $DOB = $request->input('DOB');
      $lastdonate = $request->input('lastdonate'); // This one waits
      $bloodgroup = $request->input('bloodgroup'); // This one waits
      
      return $division;
/*      DB::insert('insert into student (name) values(?)',[$name]);
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/insert">Click Here</a> to go back.';*/
   }
}
