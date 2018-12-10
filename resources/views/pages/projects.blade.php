@extends('layouts.app')
@section('content')

<div id="projects-container" class="vh-100">
	@include('partials.navbar')
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="card bg-transparent shadow-none" id="projects-card">

					<div class="card-body">
						@include('partials.breadcrumbs')
							<!-- Title -->
							<h1 class="card-title">Projects</h1>
							<hr class="left">
							<p class="card-text white-text">
								Coding is the new fun.  
							</p>
							<!-- Text -->
							<div class="row text-center">
								@foreach ($projects as $project)
								<div class="col-lg-3 col-md-4 mb-5">
									<div class="view zoom overlay">
										<img src="{{$project->featured}}" class="img-fluid img-thumbnail">

										<div class="mask rgba-black-strong rounded">
											<a class="github-fork-ribbon" href="{{$project->github}}" data-ribbon="Fork me on GitHub" title="Fork me on GitHub">

											</a>
										</div>
									</div>
									<a href="{{ route('projects.show', ['project' => $project->slug]) }}">{{$project->name}}</a>
								</div>
								@endforeach

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

	