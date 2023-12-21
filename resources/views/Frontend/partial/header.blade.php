<div id="fh5co-wrapper mt-5">
	<div id="fh5co-page">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 text-left fh5co-link">
						<a href="#">FAQ</a>
						<a href="#">Forum</a>
						<a href="#">Contact</a>
					</div>
					<div class="col-md-6 col-sm-6 fh5co-link">
						<form action="{{route('User.search')}}" method="get">
							<div class="row">
								<input type="text" class="col-md-9" placeholder="Search..." name="search">
								<button type="submit" class="btn btn-sm btn-success">Search</button>
							</div>
						</form>
					</div>
					<div class="col-md-3 col-sm-6 text-right fh5co-social">
						<a href="#" class="grow"><i class="icon-facebook2"></i></a>
						<a href="#" class="grow"><i class="icon-twitter2"></i></a>
						<a href="#" class="grow"><i class="icon-instagram2"></i></a>
					</div>
				</div>
			</div>
		</div>

		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.html">CHILD CARE</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active">
								<a href="index.html">Home</a>
							</li>
			  
			  
			  				<li>
								<a href="http://127.0.0.1:8000/user/profile#" class="fh5co-sub-ddown sf-with-ul mouse1">Get Involved</a>
								<ul class="fh5co-sub-menu dropdown-content1" style="display: none;">
									<li><a href="http://127.0.0.1:8000/donations/form">Donate</a></li>
									<li><a href="http://127.0.0.1:8000/user/profile#">Fundraise</a></li>
									<li><a href="http://127.0.0.1:8000/user/profile#">Campaign</a></li>
									<li><a href="http://127.0.0.1:8000/user/profile#">Philantrophy</a></li>
									<li><a href="http://127.0.0.1:8000/user/profile#">Volunteer</a></li>
								</ul>
							</li>

							<li class=""><a href="http://127.0.0.1:8000/user/profile#" class="fh5co-sub-ddown sf-with-ul mouse2">Projects</a>
								<ul class="fh5co-sub-menu dropdown-content2" style="display: none;">
								<li><a href="https://www.free-css.com/free-css-templates">Water World</a></li>
								<li><a href="https://www.free-css.com/free-css-templates">Cloth Giving</a></li>
								<li><a href="https://www.free-css.com/free-css-templates">Medical Mission</a></li>
								</ul>
							</li>
							<li><a href="donor.html">Donor</a></li>
							<li><a href="{{route('forntend.orphon.list')}}">Orphan</a></li>
							<li><a href="contact.html">Contact</a></li>
							@guest
							<li style="margin-left: 10px;">
								<a href="{{route('user.registration')}}" class="btn btn-primary btn-lg active  ml-5" role="button" aria-pressed="true">Registration </a>
							</li>
							<li style="margin-left: 10px;">
								<a href="{{route('Login_User')}}" class="btn btn-primary btn-lg active  ml-5" role="button" aria-pressed="true">Login</a>
							</li>
							@endguest

							@auth
							<li style="margin-left: 10px;">
								<a href="{{route('user.profile')}}" class="btn btn-primary btn-lg active  ml-5" role="button" aria-pressed="true">Profile</a>
							</li>
							@endauth
						</ul>
					</nav>
				</div>
			</div>
		</header>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> 
<script>
$('.mouse1').mouseenter(function () {
       $('.dropdown-content1').show();
     }
 )
$('.mouse1').mouseleave(function () {
       $('.dropdown-content1').hide();
     }
 )

 $('.dropdown-content1').mouseenter(function () {
       $('.dropdown-content1').show();
     }
 )
$('.dropdown-content1').mouseleave(function () {
       $('.dropdown-content1').hide();
     }
 )
 
</script>

<script>
$('.mouse2').mouseenter(function () {
       $('.dropdown-content2').show();
     }
 )
$('.mouse2').mouseleave(function () {
       $('.dropdown-content2').hide();
     }
 )

 $('.dropdown-content2').mouseenter(function () {
       $('.dropdown-content2').show();
     }
 )
$('.dropdown-content2').mouseleave(function () {
       $('.dropdown-content2').hide();
     }
 )
 


</script>