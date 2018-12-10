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
	<h1>Add Project</h1>
	<form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label id="name">
				Name
			</label>
			<input type="text" class="form-control" name="name" id="name" value="{{old('name')}}">
		</div>
		<div class="form-group">
			<label id="description">
				Description
			</label>
			<input type="text" class="form-control" name="description" id="description" value="{{old('description')}}">
		</div>
		<div class="form-group">
			<label id="github">
				Github
			</label>
			<input type="text" class="form-control" name="github" id="github" value="{{old('github')}}">
		</div>
		<div class="form-group">
			<label id="featured">
				Featured Image
			</label>
			<input type="file" class="form-control" name="featured" id="featured" value="{{old('featured')}}">
		</div>
		<div class="form-group" id="textarea">
			<label id="content">
				Content
			</label>
			<textarea name="content" id="content" class="form-control my-editor">
				{{old('content')}}
			</textarea> 
		</div>
		<button class="btn btn-primary">Submit</button>
	</form>
</div>
@endsection

