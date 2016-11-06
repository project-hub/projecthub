@extends('layouts.master')

@section('content')
<div class='container'>
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3 signUpDiv">
			<h1 class="signUpTitle">Sign Up:</h1>
			<form method="POST" action="{{ action('Auth\AuthController@postRegister') }}">
				{{ csrf_field() }}
				<div class="form-group">
			    	<label for="name">First Name:</label>
			    	<input type="text" class="form-control" name="first_name">
			  	</div>
			  	<div class="form-group">
			    	<label for="name">Last Name:</label>
			    	<input type="text" class="form-control" name="last_name">
			  	</div>
			  	@if($errors->has('email'))
                <div class="alert alert-danger">
                    {{ $errors->first('email') }}
                </div>
       	 		@endif
				<div class="form-group">
			    	<label for="email">Email:</label>
			    	<input type="text" class="form-control" name="email">
			  	</div>
			  	<div class="checkbox form-group">
                     <label>
                     	<input type="hidden" name="employer" value="0">
                        <input type="checkbox" name="employer" value="1"> I am an employer
                     </label>
                </div>
                <div class="form-group">
			    	<label for="name">If an Employer Enter Company Name:</label>
			    	<input type="text" class="form-control" name="company_name">
			  	</div>
			  	@if($errors->has('password'))
                <div class="alert alert-danger">
                    {{ $errors->first('password') }}
                </div>
       	 		@endif
				<div class="form-group">
			    	<label for="password">Password:</label>
			    	<input type="password" class="form-control" name="password">
			  	</div>
			  	@if($errors->has('password_confirmation'))
                <div class="alert alert-danger">
                    {{ $errors->first('password_confirmation') }}
                </div>
        		@endif
				<div class="form-group">
			    	<label for="password_confirmation">Password Confirmation:</label>
			    	<input type="password" class="form-control" name="password_confirmation">
			  	</div>
			  	<button type="submit" class="btn resetBtn">Register</button>
			  	<br>
			</form>
		</div>
	</div>
</div>
@stop