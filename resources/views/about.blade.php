@extends('layouts.master')

@section('title', $title)

@section('meta-desc', $metaDesc)

@section('content')
	<h1>about Page</h1>


	<ul>
		@foreach ($staff as $staffMember)
		    <li>{{$staffMember['name']}} is {{$staffMember['age'] or 'unknown'}} year old

			    @if(isset($staffMember['age']))

			    	@if($staffMember['age'] >= 21)
			    		Adult.
					    	@else
					    	Child.
			    	@endif
				
				@endif
			</li>
		@endforeach
	</ul>
@endsection


@section('footer')
	@parent
	<ul>
		<li>Ph:123456789</li>
	</ul>


	@forelse ($comments as $comment)
	    <div>
	    	{{$comment['heading']}}
	    	<br/>
	    	{!!$comment['comment']!!}  {{-- {!! !!} this is forcing to use html or javascript code on page --}}
	    </div>

	    @empty {{-- if u cant find comment above than use @empty function to show nothing --}}

		<div>
			No Comments
		</div>
	@endforelse
@endsection