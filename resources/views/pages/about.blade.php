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
		<div class="card d-flex flex-center" id="about-content">
			<!-- Card content -->
			<div class="card-body">
				<img src="{{ asset('uploads/img/me.jpg') }}" class="rounded-circle d-block mx-auto mb-3" width="200">

				<div class="row">
					<div class="col-md-8 offset-md-2">
						<!-- Text -->
						<div class="card-text white-text text-monospace rgba-black-strong p-5 rounded">
							<h2 class="h4">Why do I code?</h2>
							<p class="mb-3">
								Some quick example text to build on the card title and make up the bulk of 
								the card's content.
							</p>
						<h2 class="h4">Education</h2>
						<ul class="text-left list-unstyled">
							<li>dasdas</li>
							<li>dsad</li>
						</ul>
						</div>


					</div>
				</div>

			</div>

		</div>
		<!-- Card -->
	</div>
</div>
<div class="">
	@include('partials.footer')
</div>

@endsection