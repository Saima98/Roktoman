<?php
use Illuminate\Http\Request;
	$fname=session()->get('fname');
	$lname=session()->get('lname');
	$DOB=session()->get('DOB');
	$weight=session()->get('weight');
	$division=session()->get('division');
	$email=session()->get('email');
	$lastdonate=session()->get('lastdonate');
	$number=session()->get('number');
	$bloodgroup=session()->get('bloodgroup');
	$gender=session()->get('gender');
	if($lastdonate==NULL)
		$lastdonate="N/A";

	$requests=\DB::table('bloodrequests')->get();
	$comments=\DB::table('comments')->get();
	$users=\DB::table('users')->get();
	$admin = \DB::table('users')->where('adminship','=', 1 )->get();
?>

@extends('frontView.master')

@section('title_area')
	admin page
@endsection

@section('header_css')
	<header class="header_area2">
@endsection

@section('header_menu')
	<div class="menu">
		<ul class="nav">
			<li class="current"><a href="#contact">profile</a></li>
		</ul>
	</div>
	<div class="menu_link">
		<a href="/logout" class="link">log out <i class="fas fa-sign-out-alt"></i></a>
	</div>
@endsection

@section('home_body')
		<section class="admin_view_area">
			<div class="container-fluid">
				<div class="row">
					<div class="col-3">
						<div class="users_view_left">
							<ul>
								<li id="my_info">my information</li>
								<li id="blood_posts">blood posts</li>
								<li id="users_message">users message</li>
								<li id="all_users"> all users</li>
								<li id="admins"> all admins</li>
								<li data-toggle="modal" data-target="#myModal">search anybody</li>
								<!-- The Modal -->
								<div class="modal" id="myModal">
									<div class="modal-dialog">
										<div class="modal-content">
									  
										<!-- Modal Header -->
										<div class="modal-header">
										  <h4 class="modal-title">Modal Heading</h4>
										  <button type="button" class="close" data-dismiss="modal">&times;</button>
										</div>
										
										<!-- Modal body -->
										<div class="modal-body">
											<form action="#">
												<div class="form-group">
													<input type="email" name="email" placeholder="email address" required>
													<input class="btn btn-danger" type="submit" value="sign up">
												</div>
											</form>
										</div>
										
										<!-- Modal footer -->
										<div class="modal-footer">
										  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
										</div>
										
									  </div>
									</div>
								</div>
							</ul>
						</div>
					</div>
					<div class="col-9">
						<div class="users_view_right_info" id="users_view_right_info">
							<div class="users_info" id="users_info">
								<div class="hello_massage">
									<h1>Hello Admin {{$fname.' '.$lname}} !</h1>
									<h3 style="color:red;text-align: center">{{Session::get('message')}}</h3>
								</div>
								<table class="table table-dark table-striped">
									<tr>
										<td>name</td>
										<td>{{$fname.' '.$lname}}</td>
									</tr>
									<tr>
										<td>email</td>
										<td class="text_transform_none">{{$email}}</td>
									</tr>
									<tr>
										<td>phone number</td>
										<td>{{$number}}</td>
									</tr>
									<tr>
										<td>division</td>
										<td>{{$division}}</td>
									</tr>
									<tr>
										<td>birthday</td>
										<td>{{$DOB}}</td>
									</tr>
									<tr>
										<td>weight</td>
										<td>{{$weight}}</td>
									</tr>
									<tr>
										<td>blood group</td>
										<td>{{$bloodgroup}}</td>
									</tr>
									<tr>
										<td>last donation date</td>
										<td>{{$lastdonate}}</td>
									</tr>
									<tr>
										<td>gender</td>
										<td>{{$gender}}</td>
									</tr>
								</table>
								<div class="update">
									<a id="update" href="#" class="box_bttn">update</a>
								</div>
								<div class="update">
									<a id="change_pass" href="#" class="box_bttn">change password</a>
								</div>
							</div>
							<div class="update_sec" id="update_sec">
								<div class="back_cross" id="change_back_cross">
									<i class="fas fa-times"></i>
								</div>
								<div class="row">
									<div class="col-10 mx-auto">
										<form class="update_form" action="{{url('/users_view/update')}}" method="post" enctype="multipart/form-data">
										@csrf
											<div class="form_input">
												<label for="name">First name:</label>
												<input type="text" class="form-control" name="fname" id="fname" value="{{$fname}}">
											</div>
											<div class="form_input">
												<label for="name">Last name:</label>
												<input type="text" class="form-control" name="lname" id="fname" value="{{$lname}}">
											</div>
											<div class="form_input">
												<label for="tel">Phone number:</label>
												<input type="tel" class="form-control" name="tel" id="tel" value="{{$number}}">
											</div>
											<div class="form-group form_input">
												<label for="email">Division:</label>
												<select class="form-control" id=""  name="division" value="{{$division}}" required>
													<option value="Barisal">Barisal </option>
													<option value="Chittagong">Chittagong </option>
													<option value="Dhaka">Dhaka </option>
													<option value="Khulna">Khulna </option>
													<option value="Mymensingh">Mymensingh </option>
													<option value="Rajshahi">Rajshahi </option>
													<option value="Sylhet">Sylhet </option>
												</select>
											</div>
											<div class="form_input">
												<label for="weidth">Weidth:</label>
												<input type="int" class="form-control" id="weigth" name="weigth" value="{{$weight}}">
											</div>
											<div class="form_input">
												<label for="lastDonate">Last donate:</label>
												<input type="date" class="form-control" id="last_donate" name="last_donate" value="{{$lastdonate}}">
											</div>
											<!-- <div class="form_input radio_input">
												<label class=""><input type="radio" name="optradio" checked>Male</label>
												<label class=""><input type="radio" name="optradio">Female</label>
												<label class=""><input type="radio" name="optradio">Other</label>
											</div> -->
											<!-- <div class="form_input">
												<label for="old-pass">Old password:</label>
												<input type="password" class="form-control" id="">
											</div>
											<div class="form_input">
												<label for="newPass">New password:</label>
												<input type="password" class="form-control" id="">
											</div>
											<div class="form_input">
												<label for="matchPass">Confirm-password:</label>
												<input type="password" class="form-control" id="">
											</div> -->
											<input type="email" name="email" value="{{$email}}">
											<div class="submit">
												<input type="submit" class="box_bttn" value="update">
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="update_sec" id="change_pass_sec">
								<div class="back_cross" id="back_cross">
									<i class="fas fa-times"></i>
								</div>
								<div class="row">
									<div class="col-10 mx-auto">
										<form class="update_form" action="{{url('/changepass')}}" method="post" enctype="multipart/form-data">
										@csrf
											<div class="form_input">
												<label for="old-pass">Old password:</label>
												<input type="password" class="form-control" name="oldpass" id="" required>
											</div>
											<div class="form_input">
												<label for="newPass">New password:</label>
												<input type="password" class="form-control" name="newpass" id="" required>
											</div>
											<div class="form_input">
												<label for="matchPass">Confirm-password:</label>
												<input type="password" class="form-control" name="confirmpass" id="" required>
											</div>
											<input type="email" name="email" value="{{$email}}">
											<div class="submit">
												<input type="submit" class="box_bttn" value="change password">
											</div>
										</form>
									</div>
								</div>
							</div>
							
							
							
						</div>
						<div class="users_view_right_posts" id="users_view_right_posts">
							<div class="hello_massage">
								<h1>hello admin !<br/>they need help.please help.</h1>
							</div>
							<table class="table table-dark table-striped">
								<tr>
									<th>id</th>
									<th>name</th>
									<th>number</th>
									<th>bloodgroup</th>
									<th>division</th>
									<th>message</th>
								</tr>
								<?php $sr=1;
									foreach ($requests as $data):
							 	?>
								<tr>
									<td>{{$sr}}</td>
									<td>{{$data->name}}</td>
									<td><a href="tel:+(07) 012345678"><i class="fa fa-phone" aria-hidden="true"></i>{{$data->number}}<a/></td>
									<td>{{$data->bloodgroup}}</td>
									<td><i class="fa fa-map-marker" aria-hidden="true"></i>{{$data->division}}</td>
									<td>{{$data->message}}</td>
								</tr>
								<?php 
							  		$sr++;
							  		endforeach;
								?>
							</table>
						</div>
						<div class="users_view_right_posts" id="admin_view_users_message">
							<div class="hello_massage">
								<h1>hello admin !<br/>your message updates.</h1>
							</div>
							<table class="table table-dark table-striped">
								<tr>
									<th>id</th>
									<th>name</th>
									<th>email</th>
									<th>message</th>
									<th></th>
								</tr>
								</tr>
								<?php $sr=1;
									foreach ($comments as $data):
							 	?>
								<tr>
									<td>{{$sr}}</td>
									<td>{{$data->name}}</td>
									<td class="text_transform_none"><a href="mailto:support@info.com"><i class="fa fa-envelope" aria-hidden="true"></i>{{$data->email}}<a/></td>
									<td>{{$data->message}}</td>
									<td><a class="delete_btn" href="{{ action('AdminsViewController@delete', $data->id) }}">delete</a></td>
								</tr>
								<?php 
							  		$sr++;
							  		endforeach;
								?>
							</table>
						</div>
						<div class="users_view_right_posts" id="all_users_data">
							<div class="hello_massage">
								<h1>hello admin !<br/>there is all yours users.</h1>
							</div>
							<table class="table table-dark table-striped">
								<tr>
									<th>id</th>
									<th>name</th>
									<th>email</th>
									<th>number</th>
									<th></th>
								</tr>
								<?php $sr=1;
									foreach ($users as $data):
							 	?>
								<tr>
									<td>{{$sr}}</td>
									<td>{{$data->fname}} {{$data->lname}}</td>
									<td class="text_transform_none"><a href="mailto:support@info.com"><i class="fa fa-envelope" aria-hidden="true"></i>{{$data->email}}<a/></td>
									<td><a href="tel:+(07) 012345678"><i class="fa fa-phone" aria-hidden="true"></i>{{$data->number}}<a/></td>
									<td><a class="delete_btn" href="{{url('/admins/makeAdmin',$data->id) }}">make admin</a></td>
								</tr>
								<?php 
							  		$sr++;
							  		endforeach;
								?>
							</table>
						</div>
						<div class="users_view_right_posts" id="all_admin">
							<div class="hello_massage">
								<h1>hello admin !<br/>there is other admins list .</h1>
							</div>
							<table class="table table-dark table-striped">
								<tr>
									<th>id</th>
									<th>name</th>
									<th>email</th>
									<th>number</th>
									<th></th>
								</tr>
								<?php $sr=1;
									foreach ($admin as $data):
							 	?>
								<tr>
									<td>{{$sr}}</td>
									<td>{{$data->fname}} {{$data->lname}}</td>
									<td class="text_transform_none"><a href="mailto:support@info.com"><i class="fa fa-envelope" aria-hidden="true"></i>{{$data->email}}<a/></td>
									<td><a href="tel:+(07) 012345678"><i class="fa fa-phone" aria-hidden="true"></i>{{$data->number}}<a/></td>
									<td><a class="delete_btn" href="{{url('/admins/removeAdmin',$data->id) }}">remove admin</a></td>
								</tr>
								<?php 
							  		$sr++;
							  		endforeach;
								?>
							</table>
						</div>
					</div>
				</div>
			</div>
		</section>
@endsection

@section('js_script')
		<script type="text/javascript" src="assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/wow.min.js"></script>
		<script type="text/javascript" src="assets/js/main.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#my_info").click(function(){
					$("#users_view_right_posts").hide();
					$("#admin_view_users_message").hide();
					$("#all_users_data").hide();
					$("#all_admin").hide();
					$("#users_view_right_info").show();
				});
				$("#blood_posts").click(function(){
					$("#users_view_right_posts").show();
					$("#users_view_right_info").hide();
					$("#admin_view_users_message").hide();
					$("#all_users_data").hide();
					$("#all_admin").hide();
				});
				$("#users_message").click(function(){
					$("#users_view_right_posts").hide();
					$("#users_view_right_info").hide();
					$("#all_users_data").hide();
					$("#all_admin").hide();
					$("#admin_view_users_message").show();
				});
				$("#all_users").click(function(){
					$("#users_view_right_posts").hide();
					$("#users_view_right_info").hide();
					$("#admin_view_users_message").hide();
					$("#all_admin").hide();
					$("#all_users_data").show();
				});
				$("#admins").click(function(){
					$("#users_view_right_posts").hide();
					$("#users_view_right_info").hide();
					$("#admin_view_users_message").hide();
					$("#all_users_data").hide();
					$("#all_admin").show();
				});
				$("#update").click(function(){
					$("#update_sec").show();
					$("#users_info").hide();
					$("#change_pass_sec").hide();
				});
				$("#back_cross").click(function(){
					$("#update_sec").hide();
					$("#change_pass_sec").hide();
					$("#users_info").show();
				});
				$("#change_back_cross").click(function(){
					$("#update_sec").hide();
					$("#change_pass_sec").hide();
					$("#users_info").show();
				});
				$("#change_pass").click(function(){
					$("#update_sec").hide();
					$("#users_info").hide();
					$("#change_pass_sec").show();
				});
				//Active link
				$(function(){
					$('.users_view_left li').click(function () {
					$('.users_view_left li').removeClass('aclive_link_admin');
					$(this).addClass('aclive_link_admin');
					});
				});
			});
		</script>
@endsection
