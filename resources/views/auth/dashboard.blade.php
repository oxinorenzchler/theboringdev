@extends('layouts.admin')
@section('content')
<h1>Dashboard</h1>
<form action="{{ route('logout') }}" method="POST">
	@csrf
	<button>Logout</button>
	
</form>
@endsection