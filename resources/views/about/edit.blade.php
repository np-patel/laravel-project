@extends('layouts.master')

@section('content')

	<h1>Edit: {{$staffMember->first_name}} {{$staffMember->last_name}}</h1>

	<form action="{{ url('about/'.$staffMember->slug) }}" method="post" novalidate enctype="multipart/form-data">

		<input type="hidden" name="_method" value="patch">

		{{ csrf_field() }}

		<div>
			<label for="first_name">First Name: </label>
			<input type="text" id="first_name" name="first_name" value="{{ old('first_name') ? old('first_name') : $staffMember->first_name }}">

			{{ $errors->first('first_name') }}
		</div>

		<br>

		<div>
			<label for="last_name">Last Name: </label>
			<input type="text" id="last_name" name="last_name" value="{{ old('last_name') ? old('last_name') : $staffMember->last_name }}">
			{{ $errors->first('last_name') }}
		</div>

		<br>

		<div>
			<label for="age">Age: </label>
			<input type="text" id="age" name="age" value="{{ old('age') ? old('age') : $staffMember->age }}">
			{{ $errors->first('age') }}
		</div>

		<br>

		<img src="/img/staff/{{$staffMember->profile_image}}" alt="Image">

		<div>
			<label for="profile_image">Update Profile Image: </label>
			<input type="file" id="profile_image" name="profile_image">
			{{ $errors->first('profile_image') }}
		</div>

		<br>
			
		<input type="submit" value="Update Staff">

	</form>

@endsection