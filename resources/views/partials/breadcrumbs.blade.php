<nav aria-label="breadcrumb">
	<ol class="breadcrumb bg-transparent card-text p-0">
		<li class="breadcrumb-item"><a href="/">Home</a></li>
		@if($path == 'projects')
		<li class="breadcrumb-item">
			<a href="{{ route('projects.index') }}">Projects</a>
		</li>
		@elseif($path == 'about')
		<li class="breadcrumb-item">
			<a href="{{ route('projects.index') }}">About</a>
		</li>
		@else
		<li class="breadcrumb-item">
			<a href="{{ route('projects.index') }}">Projects</a>
		</li>
		<li class="breadcrumb-item">
			<a href="{{ route('projects.show', ['slug'=>$project->slug]) }}">{{$project->name}}</a>
		</li>
		@endif
	</ol>
</nav>