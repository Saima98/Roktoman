@extends('frontView.master')

@section('title_area')
	Roktoman
@endsection

@section('header_css')
	<header class="header_area">
@endsection

@section('home_body')
		<section class="login_area">
			<div class="container">
				<div class="row">
					<div class="col-8 mx-auto">
						<div class="login text-center">
							<h1>login</h1>
							<form action="#">
								<input type="email" name="email" placeholder="enter your email address" required>
								<input type="password" name="password" placeholder="enter your password" required>
								<input type="submit" class="" value="log in">
								<a href="#">forget password ?</a>
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