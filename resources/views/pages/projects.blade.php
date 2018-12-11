@extends('layouts.app')
@section('content')

<div id="projects-container" class="vh-100">
	@include('partials.navbar')
	<div class="container">
		@include('partials.breadcrumbs')
		<!-- Title -->
		<h1 class="card-title">Projects</h1>
		<hr class="left">
		<p class="card-text white-text">
			Coding is the new fun.  
		</p>
		<div class="row">
			@foreach ($projects as $project)
			<div class="col-lg-3 col-md-4 mb-3">
				<!-- Card -->
				<div class="card bg-transparent shadow-none">

					<!-- Card image -->
					<div class="view overlay zoom">
						<img class="card-img-top featured-img" src="{{ asset($project->featured) }}" alt="{{$project->name}}">
						<div class="mask flex-center rgba-black-strong">
							<a href="{{ route('projects.show', ['project' => $project->slug]) }}" class="white-text">View</a>
							<a class="github-fork-ribbon" href="{{$project->github}}" data-ribbon="Fork me on GitHub" title="Fork me on GitHub">
							</div>

						</div>

						<!-- Card content -->
						<div class="card-body text-center">


							<a href="{{ route('projects.show', ['project' => $project->slug]) }}">{{$project->name}}</a>

						</div>

					</div>
					<!-- Card -->
				</div>
				@endforeach
			</div>
		</div>
	</div>



	<div class="">
		@include('partials.footer')
	</div>
	@endsection

