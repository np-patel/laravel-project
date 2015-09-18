<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta name="description" content="@yield('meta-desc')">
</head>
<body>

	<nav>
		<ul>
			<li><a href="{{ url('/') }}">Home</a></li>
			<li><a href="{{ url('about') }}">About</a></li>

			@if(Auth::check() )
				<li><a href="{{ url('dashboard') }}">Dashboard</a></li>
				<li><a href="{{ url('auth/logout') }}">Logout</a></li>
			@else
				<li><a href="{{ url('auth/register') }}">Register</a></li>
				<li><a href="{{ url('auth/login') }}">Login</a></li>
			@endif

		</ul>
	</nav>

	@yield('content')


	{{-- Section for the footer. we can munipulate later if we want --}}
	@section('footer')
	<footer>
		<p>Some copyRight</p>
	</footer>
	@show {{-- always shows on all the page --}}

</body>
</html>