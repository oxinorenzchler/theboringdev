@extends('layouts.app')
@section('content')
<div id="intro-section" class="vh-100 mb-5">
	@include('partials.navbar')

	<div class="container row center text-white">
		
		<div class="col-md-8 text-uppercase">
			<img src="https://cdn-images-1.medium.com/max/1200/1*frC0VgM2etsVCJzJrNMZTQ.png" class="img-fluid d-none d-md-block mx-auto" height="200" width="200">
			<h1>Full stack web developer</h1>

			<ul class="list-inline tag-line">
				<li class="list-inline-item">Curious</li>
				<li class="list-inline-item">|</li>
				<li class="list-inline-item">Creative</li>
				<li class="list-inline-item">|</li>
				<li class="list-inline-item">Capable </li>
			</ul>
			<ul class="list-inline">
				<li class="list-inline-item"><a href=""><i class="fab fa-linkedin social"></a></i></li>
				<li class="list-inline-item"><a href=""><i class="fab fa-github social"></i></a></li>
				<li class="list-inline-item"><a href=""><i class="fab fa-stack-overflow social"></i></a></li>
				<li class="list-inline-item"><a href=""><i class="fab fa-facebook social"></i></a></li>
				<li class="list-inline-item"><a href=""><i class="fab fa-twitter social"></i></a></li>
			</ul>
			<button class="btn btn-lg text-uppercase" id="cv-download">Download CV</button>	
		</div>
		<div class="col-md-4">
			<form action="" method="POST" class="card p-3" id="contact-form">
				@csrf
				<h2 class="text-center">Let's talk!</h2>
				<div class="form-group">
					<label class="">Name</label>
					<input type="" name="" class="form-control">
				</div>
				<div class="form-group">
					<label class="">Phone or email address</label>
					<input type="" name="" class="form-control">
				</div>
				<div class="form-group">
					<label>Message</label>
					<textarea class="form-control"></textarea>
				</div>
				<button class="btn  btn-warning">Submit</button>
			</form>
		</div>	

	</div>
</div>


<div class="container mb-5">
	<div id="portfolio-section" class="mb-5">
		@include('partials.portfolio_section')
	</div>

	

	<div id="experience-section" class="mb-5">
		@include('partials.experience_section')
	</div>

	<div id="education-section" class="mb-5">
		@include('partials.education_section')
	</div>

<div id="about-section">
	@include('partials.about')
</div>

</div>

<div class="">
	@include('partials.footer')
</div>
@endsection