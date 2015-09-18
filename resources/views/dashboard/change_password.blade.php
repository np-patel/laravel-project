<div>
	<h2>Change Password</h2>

	<form action="{{ url('dashboard/change_password') }}" method="post">
		
	{{ csrf_field() }}

	<div>
        <label for="current_password">Password: </label>
        <input type="password" name="current_password" id="current_password">
    </div>

    <div>
        <label for="password">New Password: </label>
        <input type="password" name="password" id="password">
    </div>

    <div>
        <label for="password_confirmation">Confim Password: </label>
        <input type="password" name="password_confirmation" id="password_confirmation">
    </div>

    <input type="submit" value="Change Password">

	</form>

	@if(Session::get('password_change'))
		<strong>{{ Session::get('password_change') }}</strong>
	@endif

	@if( count($errors) > 0 )
		<ul>
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	@endif

</div>