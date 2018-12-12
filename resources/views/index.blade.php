@extends('layouts.app')
@section('content')
<div id="intro-section" class="vh-100 mb-5">
	@include('partials.navbar')
	<div class="container mt-6">
		<div class="row text-white">

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
					<li class="list-inline-item"><a href="https://www.linkedin.com/in/renzchler-oxi%C3%B1o-0a3aba160/" target="_blank"><i class="fab fa-linkedin social"></a></i></li>
					<li class="list-inline-item"><a href="https://github.com/oxinorenzchler" target="_blank"><i class="fab fa-github social"></i></a></li>
					<li class="list-inline-item"><a href="https://stackoverflow.com/users/9555319/renzchler" target="_blank"><i class="fab fa-stack-overflow social"></i></a></li>
					<li class="list-inline-item"><a href="https://www.facebook.com/renzch.oxino" target="_blank"><i class="fab fa-facebook social"></i></a></li>
					<li class="list-inline-item"><a href="https://twitter.com/iRenzOx" target="_blank"><i class="fab fa-twitter social"></i></a></li>
				</ul>
				{{-- <button class="btn btn-lg text-uppercase" id="cv-download">Download CV</button>	 --}}

			</div>
			<div class="col-lg-4 col-md-6">
				<button class="btn btn-submit btn-sm d-none d-md-none d-block"  data-toggle="modal" data-target="#contact-form-modal">Beep me!</button>
				<form action="{{ route('messages.store') }}" method="POST" class="card p-3 d-none d-md-block" id="contact-form">
					@csrf
					<h2 class="text-center">Let's talk!</h2>
					<label for="name">Name</label>
					<div class="form-group">
						<input id="name" type="text" name="name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{old('name')}}">
						@if ($errors->has('name'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('name') }}</strong>
						</span>
						@endif
					</div>
					<label for="contact">Phone or email address</label>
					<div class="form-group">
						<input id="contact" type="text" name="contact" class="form-control {{$errors->has('contact') ? ' is-invalid' : ''}}" value="{{old('contact')}}">
						@if ($errors->has('contact'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('contact') }}</strong>
						</span>
						@endif
					</div>
					<label for="message">Message</label>
					<div class="form-group">
						<textarea id="message" class="form-control {{$errors->has('message') ? ' is-invalid' : ''}}" name="message">{{{old('message')}}}</textarea>
						@if ($errors->has('message'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('message') }}</strong>
						</span>
						@endif
					</div>
					<button class="btn btn-submit w-100 btn-sm">Submit</button>
				</form>
			</div>	

		</div>
	</div>
</div>

<div class="mb-5">
	<div class="portfolio-section container">
		@include('partials.portfolio_section')
	</div>
</div>
<div class="mb-5" id="skills-section">
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
	@if(Session::has('success_msg'))
	<input type="hidden" id="contact-confirmation" value="ok">
	@endif
</div>


@include('partials.contact_modal')

@endsection

