@extends('layouts.master')

@section('content')

	<h1>Edit: {{$staffMember->first_name}} {{$staffMember->last_name}}</h1>

	<form action="{{ url('about/'.$staffMember->slug) }}" method="post">

	{{ csrf_field() }}

	<div>
		<label for="first_name">First Name: </label>
		<input type="text" id="first_name" name="first_name" value="{{ $staffMember->first_name }}">

		{{-- {{ $errors->first('first_name') }} --}}
	</div>

	<div>
		<label for="last_name">Last Name: </label>
		<input type="text" id="last_name" name="last_name" value="{{ $staffMember->last_name }}">
		{{-- {{ $errors->first('last_name') }} --}}
	</div>
		
	<input type="submit" value="Update Staff">

	</form>

@endsection