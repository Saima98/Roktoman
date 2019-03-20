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
		<a href="/login" class="link">log out <i class="fas fa-portrait"></i></a>
	</div>
@endsection

@section('home_body')
		<section class="users_view_area">
			<div class="container-fluid">
				<div class="row">
					<div class="col-3">
						<div class="users_view_left">
							<ul>
								<li>my information</li>
								<li>blood posts</li>
							</ul>
						</div>
					</div>
					<div class="col-9">
						<div class="users_view_right">
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
									<td>{{$email}}</td>
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
									<td>weigth</td>
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
@endsection