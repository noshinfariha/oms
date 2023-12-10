<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 text-left fh5co-link">
						<a href="#">FAQ</a>
						<a href="#">Forum</a>
						<a href="#">Contact</a>
					</div>
					<div class="col-md-6 col-sm-6 text-right fh5co-social">
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
								<a href="#" class="fh5co-sub-ddown">Get Involved</a>
								<ul class="fh5co-sub-menu">
									<li><a href="{{route('donation.form')}}">Donate</a></li>
									<li><a href="#">Fundraise</a></li>
									<li><a href="#">Campaign</a></li>
									<li><a href="#">Philantrophy</a></li>
									<li><a href="#">Volunteer</a></li>
								</ul>
							</li>
							<li>
								<a href="#" class="fh5co-sub-ddown">Projects</a>
								 <ul class="fh5co-sub-menu">
								 	<li><a href="#">Water World</a></li>
								 	<li><a href="#">Cloth Giving</a></li>
								 	<li><a href="#">Medical Mission</a></li>
								</ul>
							</li>
							<li><a href="about.html">About</a></li>
							<li><a href="{{route('forntend.orphon.list')}}">Orphan</a></li>
							<li><a href="contact.html">Contact</a></li>
							@guest
                            <li style="margin-left: 10px;">
                                <a href="{{route('user.registration')}}" class="btn btn-primary btn-lg active  ml-5" role="button" aria-pressed="true">Registration </a>
                            </li>
                            <li style="margin-left: 10px;" >
                                <a href="{{route('Login_User')}}" class="btn btn-primary btn-lg active  ml-5" role="button" aria-pressed="true">Login</a>
                            </li>
							@endguest
							
							@auth
                            <li style="margin-left: 10px;" >
                                <a href="{{route('User_Logout')}}" class="btn btn-primary btn-lg active  ml-5" role="button" aria-pressed="true">Logout</a>
                            </li>
							@endauth
							
                    
						</ul>
					</nav>
				</div>
			</div>
		</header>