@extends('frontView.master')

@section('title_area')
	Roktoman
@endsection

@section('header_css')
	<header class="header_area">
@endsection

@section('home_body')
	<!--BANNER SECTION START-->
		<section id="slider_banner" class="slider_banners">
			<div id="home" class="banner_area1">
				<div class="banner container-fluid">
					<div class="single_banner">
						<h1>every blood dooner<Br/>is a <span>life saver</span></h1>
						<a href="/register" class="box_bttn">Registration now</a>
						<a href="/register" class="border_bttn">sign up</a>
						<a href="/search" class="box_bttn">search for blood</a>
					</div>
				</div>
			</div>
		</section>
		<section id="why_give" class="all_item_link_area">
			<div class="all_item_link">
				<div class="container-fluid">
					<div class="row">
						<div class="col-3">
							<div class="single_item_link first_col">
								<h2>Who Can Give Blood</h2>
								<p>Most people can give blood, if they are fit and healthy</p>
								<a class="underline_link" href="#who_can_give"><i class="fas fa-angle-double-right"></i>Check you can give</a>
							</div>
						</div>
						<div class="col-3">
							<div class="single_item_link">
								<h2>Become a blood donor</h2>
								<i class="far fa-check-circle"></i>
								<p>If you are completely new to blood donation</p>
								<a class="box_bttn" href="/register">register now</a>
							</div>
						</div>
						<div class="col-3">
							<div class="single_item_link">
								<h2>Already a Donor?</h2>
								<i class="fas fa-user-plus"></i>
								<p>Sign up for an online account to manage appointments</p>
								<a class="box_bttn" href="/register">sign up</a>
							</div>
						</div>
						<div class="col-3">
							<div class="single_item_link">
								<h2>Search for  donar</h2>
								<i class="fas fa-search-plus"></i>
								<!--<input class="link" type="submit" value="search"/>-->
								<a class="link" href="/search">search</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="who_can_give" class="who_can_donate_area">
			<div class="who_can_donate ptb-100">
				<div class="container-fluid">
				<h2 class="text-center">who can give blood</h2>
					<div class="ptb-100">
						<div class="row">
							<div class="col-5">
								<div class="who_can_img">
									<img src="assets/img/donating_blood.jpg" alt="" />
								</div>
							</div>
							<div class="col-7">
								<div class="who_can_bref">
									<div class="row">
										<div class="col-6">
											<div class="single_who_can">
												<h3>You can give blood if you:</h3>
												<p>Most people can give blood. You can give blood if you:</p>
												<ul>
													<li>are fit and healthy</li>
													<li>weigh between 7 stone 12 lbs and 25 stone, or 50kg and 160kg</li>
													<li>are aged between 17 and 66 (or 70 if you have given blood before)</li>
													<li>are over 70 and have given blood in the last two years</li>
												</ul>
											</div>
										</div>
										<div class="col-6">
											<div class="single_who_can">
												<h3>Check you are able to give blood</h3>
												<p>The common reasons donors should check if they can give blood are:</p>
												<ul>
													<li>if you are receiving medical or hospital treatment</li>
													<li>if you are taking medication</li>
													<li>after having a tattoo or piercing</li>
													<li>during and after pregnancy</li>
													<li>if you feel ill</li>
													<li>if you have cancer</li>
													<li>after receiving blood, blood products or organs.</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="who_can_bref col-7">
							<div class="row">
								<div class="single_who_can col-6">
									<h3>Male and female donors</h3>
									<p>Men often make ideal donors because:</p>
									<ul>
										<li>men's additional body weight means they have suitable iron levels</li>
										<li>they are less likely than women to carry certain immune cells meaning their plasma is more widely usable for transfusions</li>
										<li>their platelet count is typically higher meaning they are more likely to be accepted as platelet donors.</li>
									</ul>
								</div>
								<div class="single_who_can col-6">
									<h3>Women under 20 - check if you can give blood</h3>
									<p>If you are a woman under 20 and you weigh under 10st 3lb or 65kg or are under 5' 6" or 168cm tall you will need to estimate your blood volume to see if you can give blood. If your weight lies between two of the values shown, please use the nearest lower weight.</p>
								</div>
							</div>
						</div>
						<div class="who_can_img col-5">
							<img src="assets/img/blood_inside.png" alt="" />
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="achievement" class="achievement_area">
			<div class="achievement">
				<div class="container-fluid">
					<div class="row">
						<div class="col-3">
							<div class="back_c_marron single_achievement text-center">
								<i class="fas fa-gift"></i>
								<span class="counter">1500</span><br/><p>Success Smile</p>
							</div>
						</div>
						<div class="col-3">
							<div class="back_c_soft_marron single_achievement text-center">
								<i class="far fa-user"></i>
								<span class="counter">1100</span><br/><p>Happy Donors</p>
							</div>
						</div>
						<div class="col-3">
							<div class="back_c_marron single_achievement text-center">
								<i class="far fa-smile"></i>
								<span class="counter">2700</span><br/><p>Happy Recipient</p>
							</div>
						</div>
						<div class="col-3">
							<div class="back_c_soft_marron single_achievement text-center">
								<i class="fas fa-award"></i>
								<span class="counter">500</span><br/><p>Total Awards</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="joining_area">
			<div class="joining ptb-100">
				<div class="container">
					<div class="text-center">
						<h2>become a part Of great work today</h2>
						<p>You can give blood at any of our blood donation venues all over the world. 
						We have total sixty thousands donor centers and visit thousands of other venues on various occasions. </p>
						<a href="#" class="box_bttn">join with us</a>
					</div>
				</div>
			</div>
		</section>
		<section id="contact" class="contact_area">
			<div class="contact_top">
				<div class="container-fluid">
				
				</div>
			</div>
			<div class="contact_bottom ptb-100">
				<div class="container">
					<div class="row">
						<div class="col-6">
							<div class="contact_adress">
								<h2>contact us</h2>
								<ul>
									<li><a href="#"><i class="fas fa-map-marked-alt"></i>78 st Merrick Boulevard, New York.</a></li>
									<li><a href="tel:+(07) 012345678"><i class="fas fa-mobile-alt"></i>+(07) 012345678</a></li>
									<li><a href="mailto:support@info.com"><i class="far fa-envelope"></i>support@info.com</a></li>
								</ul>
							</div>
						</div>
						<div class="col-6">
							<div class="contact_form">
								<h2>Send any message</h2>
								<form action="/passmessage" method="post" enctype="multipart/form-data"> <!-- Changed From Rafat's End --> 
								<!--<form action="{{action('MessageController@insert')}}" method="post" enctype="multipart/form-data"> -->
									<!-- Above Line Was From Saima's End Which Is Changed -->
								<!--{{ csrf_field() }}-->
								@csrf
								<input type="text" name="name" placeholder="name" required>
									<input id="email" type="email" name="email" placeholder="email" required>
									<textarea id="message" name="message" placeholder="Message" required></textarea>
									<input class="box_bttn" type="submit" value="send message">
								</form>
							</div>
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