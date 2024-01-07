<div id="fh5co-wrapper mt-5">
	<div id="fh5co-page">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 text-left fh5co-link">
						<a href="#"></a>
						<a href="#"></a>
						<a href="#"></a>
					</div>
					<div class="col-md-6 col-sm-6 fh5co-link">
						<form action="{{route('orphan.search')}}" method="get">
							<div class="row">
								<input type="text" class="col-md-9" placeholder="Search..." name="search">
								<button type="submit" class="btn btn-sm btn-success">Search</button>
							</div>
						</form>
					</div>
					<div class="col-md-3 col-sm-6 text-right fh5co-social">
						<a href="#" class="grow"></a>
						<a href="#" class="grow"></a>
						<a href="#" class="grow"></a>
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
								<a href="{{route('frontend')}}">Home</a>
							<li><a href="donor.html">Donor</a></li>
							<li><a href="{{route('forntend.orphon.list')}}">Orphan</a></li>
							<li><a href="">About Us</a></li>
								<li><a href="{{url('/contact')}}">Contact</a></li>
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



