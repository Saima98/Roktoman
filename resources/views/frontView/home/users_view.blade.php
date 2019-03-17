@extends('frontView.master')

@section('title_area')
	users page
@endsection

@section('header_css')
	<header class="header_area2">
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
								<h1>hello user !</h1>
							</div>
							<table class="table table-striped">
								<tr>
									<td>name</td>
									<td>anni roy</td>
								</tr>
								<tr>
									<td>email</td>
									<td>chunni@gmail.com</td>
								</tr>
								<tr>
									<td>phone number</td>
									<td>01742042042</td>
								</tr>
								<tr>
									<td>password</td>
									<td class="text_transform_none">anni akta bhalo meye</td>
								</tr>
								<tr>
									<td>division</td>
									<td>sylhet</td>
								</tr>
								<tr>
									<td>birthday</td>
									<td>01-01-20</td>
								</tr>
								<tr>
									<td>weigth</td>
									<td>20kg</td>
								</tr>
								<tr>
									<td>blood group</td>
									<td>b-</td>
								</tr>
								<tr>
									<td>last donation date</td>
									<td>20-20-20</td>
								</tr>
								<tr>
									<td>gender</td>
									<td>female</td>
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