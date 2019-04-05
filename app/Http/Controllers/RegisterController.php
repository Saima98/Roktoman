<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

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
      $cofirmpassword= $request->input('confirmpassword');

      // Changes begins //


      // $input = Input::all();

      // $rules = [
      //     'password' => 'required',
      //     'confirmpassword' => 'required|same:password',
      // ];

      // $messages = [
      //     'password_confirmation.same' => 'Password Confirmation should match the Password',
      // ];
      // $validator = Validator::make($input, $rules, $messages);

      // if ($validator->fails()) {
      //     return back()->withInput()->withErrors($validator->messages());
      // }

      // changes ends //
      // if($password!=$cofirmpassword)
      //    return redirect('/newregistration')->with('message','confirmation password not matched');
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
      $password_hash=Hash::make($password);
      \DB::table('users')->insert([
    	['fname' => $firstname, 'lname' => $lastname, 'email'=>$email, 'password'=>$password_hash,'division'=>$division, 'weight'=>$weight, 'number'=>$number, 'DOB'=>$DOB, 'lastdonate'=>$lastdonate, 'bloodgroup'=>$bloodgroup, 'gender'=>$gender ]
	]);
		return view('frontView.home.login');
      //echo "Record inserted successfully.<br/>";
      //echo '<a href = "/insert">Click Here</a> to go back.';
   }
}
