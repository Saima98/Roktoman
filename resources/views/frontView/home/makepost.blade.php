@extends('frontView.master')

@section('title_area')
	make post
@endsection

@section('header_css')
	<header class="header_area2">
@endsection

@section('header_menu')
	
@endsection

@section('home_body')
		<section class="makepost_area">
			<div class="container">
				<div class="row">
					<div class="col-6">
						<div class="register_right">
						<form action="/createpost" method="post">
							@csrf
							<div class="form-group">
							<input type="text" name="name" placeholder="enter your name" required>
							<input type="number" name="number" placeholder="enter your phone number" required>
							<div class="blood_group">
								<label for="bloodGroup">blood group:</label>
								<select name="bloodgroup" class="" id="" required>
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
								<select name="division" class="" id="" required>
									<option>Barisal </option>
									<option>Chittagong </option>
									<option>Dhaka </option>
									<option>Khulna </option>
									<option>Mymensingh </option>
									<option>Rajshahi </option>
									<option>Sylhet </option>
								</select>
							</div>
							<input type="text" name="address" placeholder="your adress" />
							<textarea name="message" placeholder="Message" ></textarea>
							<input class="box_bttn" type="submit" value="post">
						</div>
						</form>
						</div>
					</div>
				</div>
			</div>
		</section>
	
@endsection

@section('js_script')
		<script type="text/javascript" src="assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="assets/js/one-page-nav.js"></script>
		<script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<script src="assets/js/wow.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/main.js"></script>
@endsection