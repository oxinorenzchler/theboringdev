@extends('layouts.admin')
@section('content')
<div class="container">
	@if (Session::has('success_msg'))
	{{Session::get('success_msg')}}
	@endif
	@if($errors)
	@foreach ($errors->all() as $err)
	{{$err}} <br>
	@endforeach
	@endif
	<h1>Edit Project</h1>
	<form action="{{ route('projects.update', ['id' => $project->id]) }}" method="POST" enctype="multipart/form-data">
		@method('PATCH')
		@csrf
		<div class="form-group">
			<label id="name">
				Name
			</label>
			<input type="text" class="form-control" name="name" id="name" value="{{$project->name}}">
		</div>
		<div class="form-group">
			<label id="description">
				Description
			</label>
			<input type="text" class="form-control" name="description" id="description" value="{{$project->description}}">
		</div>
		<div class="form-group">
			<label id="site">
				Site
			</label>
			<input type="text" class="form-control" name="site" id="site" value="{{$project->site}}">
		</div>
		<div class="form-group">
			<label id="github">
				Github
			</label>
			<input type="text" class="form-control" name="github" id="github" value="{{$project->github}}">
		</div>
		<div class="form-group">
			<label id="featured">
				Featured Image
			</label>
			<input type="file" class="form-control" name="featured" id="featured" value="{{old('featured')}}">
			<img src="{{ asset($project->featured) }}" width="150" height="150">
		</div>
		<div class="form-group">
			<label id="content">
				Content
			</label>
			<textarea name="content" id="content" class="form-control my-editor">
				{{$project->content}}
			</textarea> 
		</div>
		<button class="btn btn-primary">Submit</button>
	</form>
</div>
@endsection

