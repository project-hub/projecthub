@extends('layouts.master')

@section('content')
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<h1>Sign Up:</h1>
			<form method="POST" action="{{ action('Auth\AuthController@postRegister') }}">
				{{ csrf_field() }}
				<div class="form-group">
			    	<label for="name">First Name:</label>
			    	<input type="text" class="form-control" name="first_name" value="{{ old('name') }}">
			  	</div>
			  	<div class="form-group">
			    	<label for="name">Last Name:</label>
			    	<input type="text" class="form-control" name="last_name" value="{{ old('name') }}">
			  	</div>
				<div class="form-group">
			    	<label for="email">Email:</label>
			    	<input type="text" class="form-control" name="email" value="{{ old('email') }}">
			  	</div>
				<div class="form-group">
			    	<label for="password">Password:</label>
			    	<input type="password" class="form-control" name="password">
			  	</div>
				<div class="form-group">
			    	<label for="password_confirmation">Password Confirmation:</label>
			    	<input type="password" class="form-control" name="password_confirmation">
			  	</div>
			  	<button type="submit" class="btn btn-primary">Register</button>
			</form>
		</div>
	</div>
@stop