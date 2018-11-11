@extends('layouts.app')
@section('content')

<div id="intro-section" class="vh-100">
	@include('partials.navbar')

	<div class="text-uppercase container center text-white">
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
</div>



<div id="portfolio-section" class="text-uppercase pt-3">
	@include('partials.portfolio_section')
</div>


<div id="experience-section" class="text-uppercase pt-3">
	@include('partials.experience_section')
</div>

<div id="education-section" class="pt-3">
	@include('partials.education_section')
</div>

<div id="about-section" class="pt-3">
	@include('partials.about')
</div>
 <div class="">
     @include('partials.footer')
 </div>
@endsection