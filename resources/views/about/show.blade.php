@extends('layouts.master')

{{-- @section('title', $title) --}}

{{-- @section('meta-desc', $metaDesc) --}}

@section('content')

	<h1>{{ $staffMember->first_name}} {{ $staffMember->last_name}}</h1>

	<p>Age: {{ $staffMember->age}}</p>

	<img src="/img/staff/{{$staffMember->profile_image}}" alt="Image">

	<br>

	<a href="{{ url('about/'.$staffMember->slug.'/edit') }}">Change Details</a>

@endsection