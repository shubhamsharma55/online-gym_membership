<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>SS-Gym-Home </title>
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
			<li><a class="active" href="{{('/')}}">Home</a></li>
			<!-- <li><a href="about.html">About Us</a></li> -->
			<!-- <li><a href="{{'plan'}}">Plan</a></li> -->
			<li><a href="{{url('login')}}">Log-in</a></li>
			<li><a href="#plann">Sing-Up</a></li>
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

	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="{{URL::asset('asset/img/head111.jpg')}}">
		<div class="container">
			<div class="hero-text">
				<h2>DO,Physical Activity</h2>
				<h2>With <span>Shubham Sharma!</span></h2>
				<a href="#plann" class="site-btn">Join the Gym</a>
			</div>
		</div>
	</section>
	<!-- Hero section end -->

	<!-- Feature section -->
	<section class="feature-section">
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-lg-8">
					<div class="section-title text-center">
						<h2>The real <span>workout</span> starts when you want to stop. </h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="flaticon-004-dumbbell"></i>
						</div>
						<h4>Intense Workouts</h4>
						<p>For an activity to be vigorous, you need to work at 70 to 85 percent of your maximum heart rate, according to the American Heart Association.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="flaticon-031-app-1"></i>
						</div>
						<h4>calories</h4>
						<p>The amount of energy in an item of food or drink is measured in calories. When we eat and drink more calories than we use up, </p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="flaticon-010-podium"></i>
						</div>
						<h4>Progress </h4>
						<p>In fact, if you're working out, your body is changing. Your heart is learning to work more efficiently,</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Feature section end -->

	<!-- Pricing section end -->
	<section class="pricing-section set-bg" data-setbg="{{URL::asset('asset/img/sks.jpg')}}" id="plann">
		<div class="container">
			<div class="section-title text-white text-center">
				<h2>Select Your <span>Plan</span></h2>
			</div>
			<div class="row">
				@foreach($plan as $plans)
				<div class="col-lg-3 col-sm-6">
					<div class="pricing-box">
						<h2>Rs./{{$plans->price}}</h2>
						<p>/Month</p>
						<h3>{{$plans->plan}}</h3>
						<ul>
							@foreach($plan_desc as $plan_descs)
								@if($plan_descs->plan_id == $plans->id)
									<li>{{$plan_descs->plan_desc}}</li>
								@endif
							@endforeach
						</ul>
						<a href="{{url('/registere')}}/{{$plans->plan}}" class="site-btn">Choose Plan</a>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>
	<!-- Pricing section  -->

	<!-- Add section -->
	<section class="add-section set-bg" data-setbg="{{URL::asset('asset/img/add-bg.jpg')}}">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 ml-auto">
					<div class="add-text">
						<h2>Pay now and get a 25% <span>Discount</span></h2>
						<ul>
							<li><img src="{{URL::asset('asset/img/check-icon.png')}}" alt="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
							<li><img src="{{URL::asset('asset/img/check-icon.png')}}" alt="">Risus commodo viverra maecenas accumsan lacus vel facilisis.</li>
							<li><img src="{{URL::asset('asset/img/check-icon.png')}}" alt="">Ipsum dolor sit amet, consectetur adipiscing elit, sed do.</li>
						</ul>
						<a href="{{('/registere')}}" class="site-btn">Become a Member</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Add section end -->

	<!-- Milestones section -->
	<section class="milestones-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="milestone">
						<h2>1374</h2>
						<p>Happy Clients</p>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="milestone">
						<h2>356</h2>
						<p>Strong Bodies</p>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="milestone">
						<h2>57k</h2>
						<p>IG Followers</p>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="milestone">
						<h2>24/7</h2>
						<p>Working Hours</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Milestones section end -->

	<!-- Trainers section -->
	<section class="trainers-section">
		<div class="container">
			<div class="section-title text-center">
				<h2>Meet the <span>Trainers</span></h2>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="trainer-item">
						<div class="trainer-pic">
							<img src="{{URL::asset('asset/img/trainers/1.jpg')}}" alt="">
						</div>
						<h4>Michael Smith</h4>
						<p>Vivamus libero mauris, bibendum eget sapien ac, ultrices rhoncus ipsum nec sapien.</p>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="trainer-item">
						<div class="trainer-pic">
							<img src="{{URL::asset('asset/img/trainers/2.jpg')}}" alt="">
						</div>
						<h4>Jessica Black</h4>
						<p>Ac, ultrices rhoncus ipsum. Donec nec sapien in urna fermentum ornare.</p>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="trainer-item">
						<div class="trainer-pic">
							<img src="{{URL::asset('asset/img/trainers/3.jpg')}}" alt="">
						</div>
						<h4>James Brown</h4>
						<p>Libero mauris, bibendum eget sapien ac, ultrices rhoncus ipsum. Donec nec sapien.</p>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="trainer-item">
						<div class="trainer-pic">
							<img src="{{URL::asset('asset/img/trainers/4.jpg')}}" alt="">
						</div>
						<h4>Paula Carlton</h4>
						<p>Sapien ac, ultrices rhoncus ipsum. Donec nec sapien in urna fermen-tum ornare.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Trainers section end -->

	<!-- BMI section -->
	<section class="bmi-section spad">
		<div class="bmi-bg set-bg" data-setbg="{{URL::asset('asset/img/bmi-bg.jpg')}}"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-7 ml-auto">
					<div class="section-title mb-0">
						<h2>Calculate your <span>BMI</span></h2>
						<p>Vivamus libero mauris, bibendum eget sapien ac, ultrices rhoncus ipsum nec sapien.Vivamus libero mauris, bibendum eget sapien ac, ultrices rhoncus ipsum nec sapien.</p>
					</div>
					<div class="bmi-calculator-warp">
						<div class="bmi-calculator">
							<div class="row">
								<div class="col-sm-6">
									<input type="text" placeholder="Weight (KG)" id="bmi-weight">
								</div>
								<div class="col-sm-6">
									<input type="text" placeholder="Hight (M)" id="bmi-hight">
								</div>
								<div class="col-sm-6">
									<button class="site-btn" id="bmi-submit">Calculate</button>
								</div>
								<div class="col-sm-6">
									<input type="text" id="bmi-result" readonly>
								</div>
							</div>
							<p>Vivamus libero mauris, bibendum eget sapien ac, ultrices rhoncus ipsum nec sapien.Vivamus libero mauris, bibendum.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- BMI section end -->

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