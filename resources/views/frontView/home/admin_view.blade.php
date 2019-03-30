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
?>

@extends('frontView.master')

@section('title_area')
	users page
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
		<a href="/logout" class="link">log out <i class="fas fa-portrait"></i></a>
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
							<div class="hello_massage">
								<h1>Hello Admin {{$fname.' '.$lname}} !</h1>
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
									<a href="#" class="box_bttn">update</a>
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
					$("#users_view_right_info").show();
				});
				$("#blood_posts").click(function(){
					$("#users_view_right_posts").show();
					$("#users_view_right_info").hide();
					$("#admin_view_users_message").hide();
				});
				$("#users_message").click(function(){
					$("#users_view_right_posts").hide();
					$("#users_view_right_info").hide();
					$("#admin_view_users_message").show();
				});
				
			});
		</script>
@endsection
