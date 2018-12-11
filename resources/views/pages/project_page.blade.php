@extends('layouts.app')
@section('content')
<div id="project-container" class="vh-100">
	@include('partials.navbar')
	<div class="container">
		@include('partials.breadcrumbs')
		<!-- Title -->
		<h1 class="card-title">{{$project->name}}</h1>
		<a href="{{$project->site}}" target="_blank" class="blue-text"><u> {{$project->site}}</u></a>
		<hr class="left">
		<p class="grey-text">
			{{$project->description}}
		</p>
		<div class="row mb-5">
			<div class="col-md-9">
				{!!$project->content!!}
			</div>
			<div class="col-md-3">
				<!-- Card -->
				<div class="card mb-5">

					<!-- Card image -->
					<div class="view overlay">
						<img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap">
						<a href="#!">
							<div class="mask rgba-white-slight"></div>
						</a>
					</div>

					<!-- Card content -->
					<div class="card-body">

						<!-- Title -->
						<h4 class="card-title h6">Like what you're seeing?</h4>
						<!-- Button -->
						<a href="/" class="btn btn-primary btn-sm">Beep me!</a>

					</div>

				</div>
				<!-- Card -->

				<div id="recent-container">
					<h3 class="h5">Recent projects</h3>
					<div id="recent-item">
						<ul class="list-unstyled">
							@foreach (App\Project::recent() as $recent)
								{{-- expr --}}
							<li>
								<a href="" class="d-flex justify-content-between small"><span>{{$recent->name}}</span> <span class="font-italic">{{$recent->created_at->format('M d, Y')}}</span></a>
							</li>
						
							@endforeach
						</ul>
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