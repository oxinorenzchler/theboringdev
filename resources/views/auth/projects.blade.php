@extends('layouts.admin')
@section('content')
@if (Session::has('success_msg'))
	{{Session::get('success_msg')}}
@endif
<ul>
	@foreach ($projects as $project)
		<li class="nav-item">
			<span>{{$project->name}}</span>
        	<a class="nav-link btn btn-warning w-50" href="{{ route('projects.edit', ['id' => $project->id]) }}">Edit Project</a>
        	<form action="{{ route('projects.destroy', ['id'=>$project->id]) }}" method="POST">
        		@method('DELETE')
        		@csrf
        		<button class="btn btn-danger">Delete project</button>
        	</form>
      	</li>
	@endforeach
</ul>
@endsection
