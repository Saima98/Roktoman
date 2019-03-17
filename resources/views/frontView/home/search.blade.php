@extends('frontView.master')

@section('title_area')
	search
@endsection

@section('header_css')
	<header class="header_area2">
@endsection

@section('home_body')
		<section class="register_area container-fluid">
			<div class="register row">
				<div class="col-lg-5 col-md-6 search_left">
					<img src="assets/img/inspire.jpg" alt="inspire pic" />
				</div>
				<div class="col-lg-7 col-md-6 search_right">
					<div class="heading">
						<h2>search here</h2>
					</div>
					<form action="#">
						<div class="form-group">
							<input type="text" name="name" placeholder="name" required>
							<input type="email" name="email" placeholder="email address" required>
							<div class="blood_group">
								<label for="bloodGroup">blood group:</label>
								<select class="" id="" required>
									<option>A+</option>
									<option>B+</option>
									<option>O+</option>
									<option>AB+</option>
									<option>A-</option>
									<option>B-</option>
									<option>O-</option>
									<option>AB-</option>
								</select>
							</div>
							<div class="division">
								<label for="sel1">division:</label>
								<select class="" id="" required>
									<option>Barisal </option>
									<option>Chittagong </option>
									<option>Dhaka </option>
									<option>Khulna </option>
									<option>Mymensingh </option>
									<option>Rajshahi </option>
									<option>Sylhet </option>
								</select>
							</div>
							<input class="btn btn-danger" type="submit" value="search">
						</div>
					</form>
				</div>
			</div>
		</section>
@endsection

@section('js_script')
		<script type="text/javascript" src="assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/main.js"></script>
		<script src="assets/js/wow.min.js"></script>
@endsection