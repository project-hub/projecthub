@extends('layouts.master')
@section('title', 'Login')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3 login">
			<h1>Login:</h1>
			{{-- <form method="POST" action="{{ action('Auth\AuthController@postLogin') }}">
				{{ csrf_field() }} --}}
				@if($errors->has('email'))
					<div class="alert alert-danger">
                	{{-- {{ $errors->first('email') }} --}}
            		</div>
        		@endif
				<div class="form-group">
			    	<label for="email">Email:</label>
			    	<input type="text" class="form-control" name="email" value="{{--{{ old('email') }} --}}">
				</div>
				@if($errors->has('email'))
					<div class="alert alert-danger">
                	{{-- {{ $errors->first('password') }} --}}
            		</div>
        		@endif
				<div class="form-group">
			    	<label for="password">Password:</label>
			    	<input type="password" class="form-control" name="password">
				</div>
			  	<button type="submit" class="btn btn-primary">Login</button>
			  	<button type="submit" class="btn btn-primary">Register</button>
			</form>
		</div>
	</div>
</div>	
@stop