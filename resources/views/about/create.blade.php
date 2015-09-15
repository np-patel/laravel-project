@extends('layouts.master')

@section('title', 'Create new staff member')

@section('meta-desc', ' Create new staff member for the about page')

@section('content')
<h1>Add new Staff Member</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>


	<form action="{{ url('about') }}" method="post">

	{{ csrf_field() }}

	<div>
		<label for="first_name">First Name: </label>
		<input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}">

		{{ $errors->first('first_name') }}
	</div>

	<div>
		<label for="last_name">Last Name: </label>
		<input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}">
		{{ $errors->first('last_name') }}
	</div>
		
	<input type="submit" value="Add Staff">

	</form>

{{-- @if( count($errors) > 0 )
		<ul>
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	@endif --}}

@endsection