@extends('frontView.master')

@section('title_area')
	search view
@endsection

@section('header_css')
	<header class="header_area2">
@endsection

@section('header_menu')
	
@endsection

@section('home_body')
		<section class="search_view_area">
			<div class="container-fluid">
				<div class="hello_massage">
					<h1>hello user!<br/>there is your all updates</h1>
				</div>
				<div class="panel-body">
					<form action="#">
						<table class="table table-striped">
							<tr>
								<th>id</th>
								<th>name</th>
								<th>phone number</th>
								<th>email</th>
								<th>adrees</th>
							</tr>
							<tr>
								<td>1</td>
								<td>saima najmin</td>
								<td><a href="tel:+(07) 012345678"><i class="fa fa-phone" aria-hidden="true"></i>01721234567<a/></td>
								<td class="text_transform_none"><a href="mailto:support@info.com"><i class="fa fa-envelope" aria-hidden="true"></i>saimanajin@gmail.com<a/></td>
								<td><i class="fa fa-map-marker" aria-hidden="true"></i>zindabazar,sylhet</td>
							</tr>
							<tr>
								<td>2</td>
								<td>saima najmin</td>
								<td><a href="tel:+(07) 012345678"><i class="fa fa-phone" aria-hidden="true"></i>01721234567<a/></td>
								<td class="text_transform_none"><a href="mailto:support@info.com"><i class="fa fa-envelope" aria-hidden="true"></i>saimanajin@gmail.com<a/></td>
								<td><i class="fa fa-map-marker" aria-hidden="true"></i>zindabazar,sylhet</td>
							</tr>
						</table>
					</form>
				</div>
				<div class="make_post">
						<a href="#" class="box_bttn">make post</a>
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