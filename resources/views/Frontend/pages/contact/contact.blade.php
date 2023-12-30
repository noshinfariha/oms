@extends("Frontend.master")

@section('container')

<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(https://st3.depositphotos.com/1385248/14794/i/450/depositphotos_147947683-stock-photo-hands-with-contact-us-words.jpg);">
				<div class="desc animate-box">
					<h2><strong>Contact</strong> Us</h2>
					<span>CHILD CARE </span>
					<span><a class="btn btn-primary btn-lg" href="{{route('donation.form')}}">Donate Now</a></span>
				</div>
			</div>

		</div>
		
		<div id="fh5co-contact" class="animate-box">
			<div class="container">
				
					<div class="row">
						<div class="col-md-6">
							<h3 class="section-title">Our Address</h3>
							<p>Gazipur.</p>
							<ul class="contact-info">
								<li><i class="icon-location-pin"></i>Gazipur</li>
								<li><i class="icon-phone2"></i>+88 01992704337</li>
								<li><i class="icon-mail"></i><a href="#">noshinfariha4200@gmail.com</a></li>
								<li><i class="icon-globe2"></i><a href="#">www.noshinfariha.com</a></li>
							</ul>
						</div>
                        <form action="{{ url('/contact-store') }}" method="post">
    @csrf
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <textarea name="message" class="form-control" cols="30" rows="7" placeholder="Message" required></textarea>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <input type="submit" class="btn btn-primary">
                </div>
            </div>
        </div>
    </div>
</form>

					</div>
				
			</div>
		</div>

        
@endsection
