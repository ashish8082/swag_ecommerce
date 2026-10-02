<!DOCTYPE html>
<html lang="en">
<head>
<title>Swaj Shop</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Swaj Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="{{ url('/frontend/images/logo_1.png') }}">
<link rel="stylesheet" type="text/css" href="{{url('/frontend')}}/styles/bootstrap4/bootstrap.min.css">
<link href="{{url('/frontend')}}/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{url('/frontend')}}/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="{{url('/frontend')}}/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="{{url('/frontend')}}/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="{{url('/frontend')}}/styles/custom.css">
<link rel="stylesheet" type="text/css" href="{{url('/frontend')}}/styles/header.css">
@yield('customcss')
</head>

<body>

<div class="super_container">

	<!-- Header -->

	<header class="header trans_300">

		@include('frontend.layouts.header')

	</header>

	<div class="fs_menu_overlay"></div>
	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">
				
				
				<li class="menu_item has-children">
					<a href="#">
						My Account
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
						<li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
					</ul>
				</li>
				<li class="menu_item"><a href="#">home</a></li>
				<li class="menu_item"><a href="#">shop</a></li>
				<li class="menu_item"><a href="#">promotion</a></li>
				<li class="menu_item"><a href="#">pages</a></li>
				<li class="menu_item"><a href="#">blog</a></li>
				<li class="menu_item"><a href="#">contact</a></li>
			</ul>
		</div>
	</div>

	  @yield('content')

	<!-- Footer -->

	<footer class="footer custom-footer">
		@include('frontend.layouts.footer')
	</footer>

</div>

<script src="{{url('/frontend')}}/js/jquery-3.2.1.min.js"></script>
<script src="{{url('/frontend')}}/styles/bootstrap4/popper.js"></script>
<script src="{{url('/frontend')}}/styles/bootstrap4/bootstrap.min.js"></script>
<script src="{{url('/frontend')}}/plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="{{url('/frontend')}}/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="{{url('/frontend')}}/plugins/easing/easing.js"></script>
<script src="{{url('/frontend')}}/js/custom.js"></script>
@yield('customjs')
</body>

</html>
