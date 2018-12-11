@extends('layouts.admin')
@section('content')
@if (Session::has('success_msg'))
		{{Session::get('success_msg')}}
	@endif
	@if($errors)
		@foreach ($errors->all() as $err)
			{{$err}} <br>
		@endforeach
	@endif
<div class="container">
	<h1>Message</h1>
	<div class="mb-5">
		<label>From:</label>
		<h3>{{$msg->name}}</h3>
	</div>
	<div class="mb-5">
		<label>Contact:</label>
		<p>{{$msg->contact}}</p>
	</div>
	<div class="mb-5">
		<label>From:</label>
		<p>
			{{$msg->message}}
		</p>
	</div>
	<form action="{{ route('messages.destroy', ['id' => $msg->id]) }}" method="POST">
		@csrf
		@method('DELETE')

		<button class="btn btn-danger">Delete</button>
		
	</form>
</div>
@endsection

