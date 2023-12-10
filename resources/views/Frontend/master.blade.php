

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Charity &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO"/>
	@notifyCss
	<style>
		.notify{
			z-index: 1000000;
		}
	</style>
  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{url('/frontend/')}}/css/animate.css">
	<!-- Icomoon Icon Fonts-->

	<link rel="stylesheet" href="{{url('/frontend/')}}/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{url('/frontend/')}}/css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="{{url('/frontend/')}}/css/superfish.css">

	<link rel="stylesheet" href="{{url('/frontend/')}}/css/style.css">
	
	

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	

		
		@include('Frontend.partial.header')
		
		<main>

		@yield('container')

		</main>
	
		
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
							<p>Copyright 2016 Free Html5 <a href="#">Charity</a>. All Rights Reserved. <br>Made with <i class="icon-heart3"></i> by <a href="http://freehtml5.co/" target="_blank">Freehtml5.co</a> / Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a></p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	
	<script src="{{url('/frontend/')}}/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="{{url('/frontend/')}}/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="{{url('/frontend/')}}/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="{{url('/frontend/')}}/js/jquery.waypoints.min.js"></script>
	<script src="{{url('/frontend/')}}/js/sticky.js"></script>

	<!-- Stellar -->
	<script src="{{url('/frontend/')}}/js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="{{url('/frontend/')}}/js/hoverIntent.js"></script>
	<script src="{{url('/frontend/')}}/js/superfish.js"></script>
	
	<!-- Main JS -->
	<script src="{{url('/frontend/')}}/js/main.js"></script>
	
	<x-notify::notify />
	@notifyJs
	</body>
</html>

