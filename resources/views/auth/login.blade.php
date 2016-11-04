@extends('layouts.master')

@section('content')
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
<div class="login well">
			<h3>Login</h3>
			<hr class="loginHeader">
			<form method="POST" action="{{ action('Auth\AuthController@postLogin') }}">
				{{ csrf_field() }}
				@if($errors->has('email'))
					<div class="alert alert-danger">
                	{{ $errors->first('email') }}
            		</div>
        		@endif
				<div class="form-group">
			    	<label for="email">Email:</label>
			    	<input type="text" class="form-control" name="email" value="{{ old('email') }}">
				</div>
				@if($errors->has('email'))
					<div class="alert alert-danger">
                	{{ $errors->first('password') }}
            		</div>
        		@endif
				<div class="form-group">
			    	<label for="password">Password:</label>
			    	<input type="password" class="form-control" name="password">
				</div>
			  	<button type="submit" class="btn resetBtn">Login</button>
			</form>
</div>
		</div>
	</div>
@stop