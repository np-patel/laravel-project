<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta name="description" content="@yield('meta-desc')">
</head>
<body>

	@yield('content')


	{{-- Section for the footer. we can munipulate later if we want --}}
	@section('footer')
	<footer>
		<p>Some copyRight</p>
	</footer>
	@show {{-- always shows on all the page --}}

</body>
</html>