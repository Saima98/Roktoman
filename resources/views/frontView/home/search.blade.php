@extends('frontView.master')

@section('title_area')
	search
@endsection

@section('header_css')
	<header class="header_area2">
@endsection

@section('header_menu')
	
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
					<form action="showSearchList" method="post">
						@csrf
						<div class="form-group">
							<div class="blood_group">
								<label for="bloodGroup">blood group:</label>
								<select class="" id="" name="bloodgroup" required>
									<option value="A+">A+</option>
									<option value="B+">B+</option>
									<option value="O+">O+</option>
									<option value="AB+">AB+</option>
									<option value="A">A-</option>
									<option value="B-">B-</option>
									<option value="O-">O-</option>
									<option value="AB-">AB-</option>
								</select>
							</div>
							<div class="division">
								<label for="sel1">division:</label>
								<select class="" id="" name="division" required>
									<option value="Barisal">Barisal </option>
									<option value="Chittagong">Chittagong </option>
									<option value="Dhaka">Dhaka </option>
									<option value="Khulna">Khulna </option>
									<option value="Mymensingh">Mymensingh </option>
									<option value="Rajshahi">Rajshahi </option>
									<option value="Sylhet">Sylhet </option>
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