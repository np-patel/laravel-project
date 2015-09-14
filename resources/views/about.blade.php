@extends('layouts.master')

@section('title', $title)

@section('meta-desc', $metaDesc)

@section('content')
	<h1>about Page</h1>


	<ul>
		@foreach ($staff as $staffMember)
		    <li>{{$staffMember['name']}} is {{$staffMember['age']}} year old</li>
		@endforeach
	</ul>
@endsection

@section('footer')
	@parent
	<ul>
		<li>Ph:123456789</li>
	</ul>
@endsection