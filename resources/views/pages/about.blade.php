@extends('layouts.app')
@section('content')
<div id="about-container">
	@include('partials.navbar')
	<div class="container mt-5 mb-5">
		<!-- Card -->
		<nav>
			<ol class="breadcrumb bg-transparent card-text p-0">
				<li class="breadcrumb-item"><a href="/">Home</a></li>
				<li class="breadcrumb-item">
					<a href="/about">About</a>
				</li>
			</ol>
		</nav>
		<!-- Title -->
		<h1 class="card-title">Who lives the pineapple under the sea?</h1>
		<hr class="left">
		<p class="card-text white-text">
			Coding is the new fun.  
		</p>
		<div class="row">
			<div class="col-md-6">
				<img src="{{ asset('uploads/img/renz.png') }}" id="about-me-pic" class="d-block mx-auto img-fluid">
			</div>
			<div class="col-md-6">
				<p id="about-content"><span class="h1">I</span>'m passionate with what I do. To me working as a web developer is a dream come true. I started with zero knowledge. To be honest I did not pay attention to programming while I was studying, I got distracted by video games. I got lost and forgot my dream, I considered myself as a failure. But it did not stop me I find myself I get back on track. So I studied back from the beginning and join a bootcamp to boost my confidence and also learn new things and engage with other developers. It really helped me a lot and everyday I practice what I learn and continue to study. No matter how many times you failed. Just keep moving forward.</p>
				    <img src="{{ asset('svg/skills.webp') }}" class="img-fluid d-block mx-auto">
			</div>
		</div>
	</div>
</div>
<div class="">
	@include('partials.footer')
</div>

@endsection