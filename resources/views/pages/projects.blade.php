@extends('layouts.app')
@section('content')

<div id="projects-container" class="vh-100">
	@include('partials.navbar')
	<div class="container center">
		<div class="row">
			<div class="col-lg-12">
				<div class="card bg-transparent" id="projects-card">
					<div class="card-body">

						<!-- Title -->
						<h1 class="card-title">Projects</h1>
						<!-- Text -->
						<div class="row">
							<div class="col-lg-3 col-md-4 mb-5">
								<img src="{{ asset('svg/whoot.png') }}" class="img-fluid img-thumbnail">
								<a href="">Purehub</a>
							</div>
							<div class="col-lg-3 col-md-4 mb-5">
								
							<img src="{{ asset('svg/whoot.png') }}" class="img-fluid img-thumbnail">
							<a href="">Purehub</a>
							</div>	
							<div class="col-lg-3 col-md-4 mb-5">
								
								<img src="{{ asset('svg/whoot.png') }}" class="img-fluid img-thumbnail">
								<a href="">Purehub</a>
							</div>
							<div class="col-lg-3 col-md-4 mb-5">
								
							<img src="{{ asset('svg/whoot.png') }}" class="img-fluid img-thumbnail">
							<a href="">Purehub</a>
							</div>
								<div class="col-lg-3 col-md-4 mb-5">
								<img src="{{ asset('svg/whoot.png') }}" class="img-fluid img-thumbnail">
								<a href="">Purehub</a>
							</div>
							<div class="col-lg-3 col-md-4 mb-5">
								
							<img src="{{ asset('svg/whoot.png') }}" class="img-fluid img-thumbnail">
							<a href="">Purehub</a>
							</div>	
							<div class="col-lg-3 col-md-4 mb-5">
								
								<img src="{{ asset('svg/whoot.png') }}" class="img-fluid img-thumbnail">
								<a href="">Purehub</a>
							</div>
							<div class="col-lg-3 col-md-4 mb-5">
								
							<img src="{{ asset('svg/whoot.png') }}" class="img-fluid img-thumbnail">
							<a href="">Purehub</a>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="">
	@include('partials.footer')
</div>
@endsection