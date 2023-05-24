<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>SS-Gym-Registere </title>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<meta name="description" content="X Gym Fitness HTML Template">
	<meta name="keywords" content="fitness, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="{{url('https://code.jquery.com/jquery-3.7.0.js')}}" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
	<!-- Favicon -->
	<link href="{{URL::asset('asset/img/favicon.ico')}}" rel="shortcut icon" />

	<!-- Google font -->
	<link href="{{url('https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&display=swap')}}" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{URL::asset('asset/css/bootstrap.min.css')}}" />
	<link rel="stylesheet" href="{{URL::asset('asset/css/font-awesome.min.css')}}" />
	<link rel="stylesheet" href="{{URL::asset('asset/css/owl.carousel.min.css')}}" />
	<link rel="stylesheet" href="{{URL::asset('asset/css/flaticon.css')}}" />
	<link rel="stylesheet" href="{{URL::asset('asset/css/slicknav.min.css')}}" />

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="{{URL::asset('asset/css/style.css')}}" />

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<a href="{{('/')}}" class="site-logo">
			<img src="{{URL::asset('asset/img/logo.png')}}" alt="">
		</a>
		<ul class="main-menu">
			<li><a href="{{('/')}}">Home</a></li>
			<!-- <li><a href="about.html">About Us</a></li> -->
			<!-- <li><a href="{{'plan'}}">Plan</a></li> -->
			<li><a href="{{('login')}}">Log-in</a></li>
			<li><a class="active" href="{{('registere')}}">Sing-Up</a></li>
			<li class="header-right">
				<div class="hr-box">
					<img src="{{URL::asset('asset/img/location-icon.png')}}" alt="">
					<h6>245205 Garh Ganga Hapur,India</h6>
				</div>
			</li>
		</ul>
	</header>
	<div class="clearfix"></div>
	<!-- Header section end -->

	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="{{URL::asset('asset/img/header-bg/4.jpg')}}">
		<div class="container">
			<h2>Registration</h2>
		</div>
	</section>
	<!-- Page top section end -->

	<!-- Contact section -->
	<section class="contact-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<h2 class="contact-title">Contact Info</h2>
					<div class="contact-info-warp">
						<h4>Location</h4>
						<div class="contact-info">
							<img src="img/icons/1-dark.png" alt="">
							<div class="cf-text">
								<p>245205 Garh Ganga Hapur,India</p>
							</div>
						</div>
					</div>
					<div class="contact-info-warp">
						<h4>Subscriptions</h4>
						<div class="contact-info">
							<img src="img/icons/2-dark.png" alt="">
							<div class="cf-text">
								<p>(+91)8755391159</p>
								<p>(+91)8739551159</p>
							</div>
						</div>
					</div>
					<div class="contact-info-warp">
						<h4>E-mail</h4>
						<div class="contact-info">
							<img src="img/icons/3-dark.png" alt="">
							<div class="cf-text">
								<p>ssgym@gmail.com</p>
								<p>www.ssgym.com</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<h2 class="contact-title">Register Your Self</h2>
					<!-- registration form start  -->
					<form action="{{url('registere')}}" method="post">
						@csrf

						@if(Session::has('failed'))
						<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert">×</button>
							{{Session::get('failed')}}
						</div>
						@endif

						<div class="form-group input-group col-md-10">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-user"></i> </span>
							</div>
							<input name="name" class="form-control" placeholder="Full name" type="text">
							{!!$errors->first("name", "<span class='text-danger  alert-danger form-control'>:message</span>")!!}
						</div> <!-- form-group// -->
						<div class="form-group input-group col-md-10">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
							</div>
							<input name="email" class="form-control" placeholder="Email address" type="email">
							{!!$errors->first("email", "<span class='text-danger  alert-danger form-control'>:message</span>")!!}
						</div> <!-- form-group// -->
						<div class="form-group input-group col-md-10">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-phone"></i></span>
								<span class="input-group-text">+91</span>
							</div>
							<input name="phone" class="form-control" placeholder="Phone number" type="text">
							{!!$errors->first("phone", "<span class='text-danger  alert-danger form-control'>:message</span>")!!}
						</div> <!-- form-group// -->
						<div class="form-group input-group col-md-10">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-rupee"></i> </span>
							</div>
							<input name="plan" class="form-control" placeholder="Full name" type="text" value="{{$plan}}" readonly>

							<!-- <select class="form-control" name="plan">
								<option selected=""> Select Plan type</option>
								<option>BRONZE</option>
								<option>SILVER</option>
								<option>GOLD</option>
							</select> -->
						</div>
						<div class="form-group input-group col-md-10">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
							</div>
							<input name="password" class="form-control" placeholder="Password" type="password">
							{!!$errors->first("password", "<span class='text-danger alert alert-danger form-control'>:message</span>")!!}
						</div> <!-- form-group// -->
						<div class="form-group input-group col-md-10">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
							</div>
							<input class="form-control" placeholder="Conform Password" type="password" name="password_confirmation">
							{!!$errors->first("password", "<span class='text-danger alert alert-danger form-control'>:message</span>")!!}
						</div> <!-- form-group// -->
						<div class="form-group col-md-10">
							<button type="submit" class="btn btn btn-block" style="background-color: #fcff18;">Create Account </button>
						</div> <!-- form-group// -->
						<p class="text-center">Have an account? <a href="{{('login')}}">Log In</a> </p>
					</form>
					<!-- registration form end -->
				</div>
			</div>
		</div>
		<div class="map"><iframe src="https://maps.google.com/maps?width=1025&amp;height=369&amp;hl=en&amp;q=garhmukteshwar&amp;t=h&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" style="border:0" allowfullscreen></iframe></div>
	</section>
	<!-- Contact section end -->

	<!-- Footer section -->
	<footer class="footer-section set-bg" data-setbg="{{URL::asset('asset/img/footer-bg.jpg')}}">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<h4>Location</h4>
						<div class="fw-info-box">
							<img src="{{URL::asset('asset/img/icons/1.png')}}" alt="">
							<div class="fw-info-text">
								<p>245205 Garh Ganga Hapur,India</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<h4>Subscriptions</h4>
						<div class="fw-info-box">
							<img src="{{URL::asset('asset/img/icons/2.png')}}" alt="">
							<div class="fw-info-text">
								<p>+918755391159</p>
								<p>+918739551159</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<h4>E-mail</h4>
						<div class="fw-info-box">
							<img src="{{URL::asset('asset/img/icons/3.png')}}" alt="">
							<div class="fw-info-text">
								<p>ssgym@gmail.com</p>
								<p>www.ssgym.com</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<h4>Social Media</h4>
						<div class="fw-info-box">
							<img src="{{URL::asset('asset/img/icons/4.png')}}" alt="">
							<div class="social-links">
								<a href="{{('https://in.pinterest.com/')}}"><i class="fa fa-pinterest"></i></a>
								<a href="{{('https://www.facebook.com/')}}"><i class="fa fa-facebook"></i></a>
								<a href="{{('https://twitter.com/login')}}"><i class="fa fa-twitter"></i></a>
								<a href="{{('https://instagram.com/login')}}"><i class="fa fa-instagram"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 order-2 order-md-1">
					<div class="copyright">
						<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>
								document.write(new Date().getFullYear());
							</script>This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="{{('/')}}" target="_blank">Shubham Sharma</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					</div>
				</div>
				<div class="col-md-6 order-1 order-md-2">
					<ul class="footer-menu">
						<li><a href="{{('/')}}">Home</a></li>
						<!-- <li><a href="{{('plan')}}">Plan </a></li> -->
						<li><a href="{{('login')}}">login</a></li>
						<li><a href="{{('registere')}}">Sing-up</a></li>
						<!-- <li><a href="">Contact</a></li> -->
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="{{URL::asset('asset/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{URL::asset('asset/js/bootstrap.min.js')}}"></script>
	<script src="{{URL::asset('asset/js/jquery.slicknav.js')}}"></script>
	<script src="{{URL::asset('asset/js/owl.carousel.min.js')}}"></script>
	<script src="{{URL::asset('asset/js/circle-progress.min.js')}}"></script>
	<script src="{{URL::asset('asset/js/main.js')}}"></script>

</body>

</html>