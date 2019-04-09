<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use\App\Comment;
use\App\User;

class AdminsViewController extends Controller
{
    /*public function admins_view(Request $request){
    	if($request->session()->has('email'))
			return view('frontView.home.admin_view');
		else
			return view('frontView.home.login');
	}*/
	public function admins_view(){
		return view('frontView.home.admin_view');
	}

	public function feedback_list(){
		$messages = \DB::table('comments')->get();

		return view('frontView.home.admin_view',compact('messages'));
	}
	
	//for user lists
	/*public function users_list(){
		$users = \DB::table('users')->get();

		return view('frontView.home.admin_view',compact('users'));
	}
	
	//for admin lists
	public function users_list(){
		$admin = \DB::table('users')where('adminship','=', 1 )->get();

		return view('frontView.home.admin_view',compact('admin'));
	}*/
	
	//changepass
	
	public function changepass(Request $request){
		$oldpass = $request->oldpass;
		$newpass = $request->newpass;
		$confirmpass = $request->confirmpass;
		$email = $request->email;
		
		$info = \DB::table('users')->where('email','=', $email )->get();
		$raw_count = \DB::table('users')->where('email','=', $email )->count();
		
		$mainpass=$info[0]->password;
		if(Hash::check($oldpass, $mainpass))
			{
				if($newpass == $confirmpass)
				{
					$password_hash=Hash::make($newpass);
					\DB::table('users')
						->where('email', $email)
						->update(['password' => $password_hash]);
					echo "done";
				}
				else
				//echo "ahem ahem";
				return redirect('/admins_view')->with('message','confirmation password not matched');
				
			}
		else
			//echo "ahem ahem";
			return redirect('/admins_view')->with('message','wrong password');
    }
	
	
	
	
	
	public function delete($id){
		
		$del= Comment::find($id);
		$del->delete();
		
        return redirect()->back();
    }
	
	//makeAdmin
	
	public function makeAdmin($id){
		
		\DB::table('users')
            ->where('id', $id)
            ->update(['adminship' => '1']);
		/*echo ("<script type="javascript">
		function myFunction() {
			window.alert('Succesfully Updated');
		}
		</script>");*/
		return redirect('/admins_view');
    }
	
	//removeAdmin
	
	public function removeAdmin($id){
		
		\DB::table('users')
            ->where('id', $id)
            ->update(['adminship' => '0']);
			
		return redirect('/admins_view');
    }
}
