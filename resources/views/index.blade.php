@extends('layouts.app')
@section('content')
<div id="intro-section" class="vh-100 mb-5">
	@include('partials.navbar')

	<div class="container row center text-white">
		
		<div class="col-lg-8 col-md-6 text-uppercase" id="intro-brand">
			<img src="{{ asset('svg/whoot.png') }}" id="intro-img" class="img-fluid">
			{{-- <img src="{{ asset('svg/gf.png') }}"  height="150"> --}}
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
			{{-- <button class="btn btn-lg text-uppercase" id="cv-download">Download CV</button>	 --}}

		</div>
		<div class="col-lg-4 col-md-6">
			<form action="" method="POST" class="card p-3 d-none d-md-block" id="contact-form">
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
				<label>Message</label>
				<div class="form-group">
					<textarea id="msg" class="form-control"></textarea>
				</div>
				<button class="btn btn-submit w-100 btn-sm">Submit</button>
			</form>
		</div>	

	</div>
</div>


<div class="mb-5">
	<div id="portfolio-section" class="container">
		@include('partials.portfolio_section')
	</div>
</div>
<div class="mb-5" style="background-color: #F5FFFA;">
	<div class="skills-section container">
		@include('partials.skills_section')
	</div>
</div>	
<div id="qoute-container" class="view">
	<div class="qoute flex-center flex-column mask rgba-black-strong">
		 <p class="text-center z-index-1 white-text qoute-text shadow">"Design is not just what it looks like and feels like. Design is how it works."</p> 
		 <span class="white-text qoute-text">-Steve Jobs</span>
		</div>	

</div>	
<div class="">
	@include('partials.footer')
</div>
@endsection