<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>SS-Gym-Plan</title>
	<meta charset="UTF-8">
	<meta name="description" content="X Gym Fitness HTML Template">
	<meta name="keywords" content="fitness, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />

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
			<!-- <li><a href="{{('/')}}">Home</a></li> -->
			<!-- <li><a href="about.html">About Us</a></li> -->
			<!-- <li><a class="active" href="#you_plan">Your Plan</a></li> -->
			<li><a href="{{url('/logout')}}">LogOut</a></li>
			<!-- <li><a href="{{('registere')}}">Sing-Up</a></li> -->
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
	<section class="page-top-section set-bg" data-setbg="{{URL::asset('asset/img/header-bg/2.jpg')}}">
		<div class="container">
			<h2>Hello,{{Session()->get('user.name')}}</h2>
			<h3 class="page-top-section set-bg">Its valid for,{{$expiring_date}}</h3>
		</div>
	</section>
	<!-- Page top section end -->


	<!-- Service section -->
	<section class="service-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-sm-6">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="flaticon-050-weightlifting"></i>
						</div>
						<h4>Bodybuilding</h4>
						<p>Donec nec sapien in urna fermentum ornare. Morbi vel ultrices leo. Sed eu turpis eu arcu vehicula fringilla ut vitae orci. </p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="flaticon-045-fitness"></i>
						</div>
						<h4>Fitness</h4>
						<p>Vivamus libero mauris, bibendum eget sapien ac, ultrices rhoncus ipsum. Donec nec sapien in urna fermentum ornare.</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="flaticon-033-pump"></i>
						</div>
						<h4>Aerobics</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at vulputate est. Donec tempor felis at nibh eleifend malesuada. </p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="flaticon-017-weightlifting-1"></i>
						</div>
						<h4>Pilates</h4>
						<p>Donec nec sapien in urna fermentum ornare. Morbi vel ultrices leo. Sed eu turpis eu arcu vehicula fringilla ut vitae orci. </p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="flaticon-004-dumbbell"></i>
						</div>
						<h4>Wheight Lifting</h4>
						<p>Donec nec sapien in urna fermentum ornare. Morbi vel ultrices leo. Sed eu turpis eu arcu vehicula fringilla ut vitae orci. </p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="flaticon-038-vitamins"></i>
						</div>
						<h4>Nutrition</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at vulputate est. Donec tempor felis at nibh eleifend malesuada. </p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Service section end -->

	<!-- Pricing section end -->
	<section class="pricing-section set-bg" data-setbg="{{URL::asset('asset/img/sks.jpg')}}">
		<div class="container">
			<div class="section-title text-white text-center">
				<h2>Your Current <span>Plan</span></h2>
			</div>
			<div class="row">
				<div class="col-lg-12 col-sm-6 ">
					<div class="pricing-box">
						<h2>Rs./{{$plan->price}}</h2>
						<p>/Month</p>
						<h3>{{$plan->plan}}</h3>
						<ul>
							@foreach($plan_desc as $plan_descs)
							<li>{{$plan_descs->plan_desc}}</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Pricing section  -->

	<!-- Classes section -->
	<section class="classes-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="section-title">
						<h2>Yes you also can<span>Do it!!</span><br>Trust me.</h2>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="classes-text">
						<p>Some people, like me and you, need the extra motivation to go to the gym, complete workout sets and generally stay on track with our fitness goals. With the numerous distractions available, it can be very challenging to push yourself to start that home workout or go to the gym-trust me, I know.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Trainers section end -->


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
							</script>This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="#" target="_blank">Shubham Sharma</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					</div>
				</div>
				<div class="col-md-6 order-1 order-md-2">
					<ul class="footer-menu">
						<li><a href="{{('/')}}">Home</a></li>
						<!-- <li><a href="{{('plan')}}">Plan </a></li> -->
						<li><a href="{{('login')}}">Logout</a></li>
						<!-- <li><a href="{{('registere')}}">Sing-up</a></li> -->
						<!-- <li><a href="">Contact</a></li> -->
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="{{URL::asset('asset/js/jquery-3.2.1.min.js')}}">
	</script>
	<script src="{{URL::asset('asset/js/bootstrap.min.js')}}"></script>
	<script src="{{URL::asset('asset/js/jquery.slicknav.js')}}"></script>
	<script src="{{URL::asset('asset/js/owl.carousel.min.js')}}"></script>
	<script src="{{URL::asset('asset/js/circle-progress.min.js')}}"></script>
	<script src="{{URL::asset('asset/js/main.js')}}"></script>

</body>

</html>