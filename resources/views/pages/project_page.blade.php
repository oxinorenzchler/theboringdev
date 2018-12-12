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
				<div id="disqus_thread"></div>
				<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*

*/
 var disqus_config = function () {
      this.page.url = '{{url()->current()}}';  // Replace PAGE_URL with your page's canonical URL variable
      this.page.identifier = '{{$project->slug}}'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };

(function() { // DON'T EDIT BELOW THIS LINE
	var d = document, s = d.createElement('script');
	s.src = 'https://boringdev.disqus.com/embed.js';
	s.setAttribute('data-timestamp', +new Date());
	(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
</div>
<div class="col-md-3">
	<!-- Card -->
	<div class="card mb-5">

		{{-- <!-- Card image -->
		<div class="view overlay">
			<img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap">
			<a href="#!">
				<div class="mask rgba-white-slight"></div>
			</a>
		</div> --}}

		<!-- Card content -->
		<div class="card-body">

			<!-- Title -->
			<h4 class="card-title h6 text-center">Like what you're seeing?</h4>
			<!-- Button -->
			<a href="/" class="btn btn-submit btn-sm w-100">Beep me!</a>

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