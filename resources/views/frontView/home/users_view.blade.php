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
		<section class="users_view_area">
			<div class="container-fluid">
				<div class="row">
					<div class="col-3">
						<div class="users_view_left">
							<ul>
								<li id="my_info">my information</li>
								<li id="blood_posts">blood posts</li>
							</ul>
						</div>
					</div>
					<div class="col-9">
						<div class="users_view_right_info" id="users_view_right_info">
							<div class="hello_massage">
								<h1>hello {{$fname.' '.$lname}}!</h1>
							</div>
							<table class="table table-striped">
								<tr>
									<td>name</td>
									<td>{{$fname.' '.$lname}} </td>
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
								<h1>hello user !<br/>they need help.please help.</h1>
							</div>
							<table class="table table-light table-striped">
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
					</div>
				</div>
			</div>
		</section>
@endsection

@section('js_script')
		<script type="text/javascript" src="assets/js/jquery.min.js"></script>
		<script src="assets/js/wow.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/main.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#my_info").click(function(){
					$("#users_view_right_posts").hide();
					$("#users_view_right_info").show();
				});
				$("#blood_posts").click(function(){
					$("#users_view_right_posts").show();
					$("#users_view_right_info").hide();
				});
			});
		</script>
@endsection
