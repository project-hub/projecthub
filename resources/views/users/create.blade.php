@extends('layouts.master')

@section('content')
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<h1>Sign Up:</h1>
			<form method="POST" action="{{--{{ action('Auth\AuthController@postRegister') }} --}}">
				{{-- {{ csrf_field() }} --}}
				<div class="form-group">
			    	<label for="name">First Name:</label>
			    	<input type="text" class="form-control" name="first_name" value="">
			  	</div>
			  	<div class="form-group">
			    	<label for="name">Last Name:</label>
			    	<input type="text" class="form-control" name="last_name" value="">
			  	</div>
			  	<div class="form-group">
			    	<label for="name">Company Name:</label>
			    	<input type="text" class="form-control" name="company_name" value="">
			  	</div>
				<div class="form-group">
			    	<label for="email">Email:</label>
			    	<input type="text" class="form-control" name="email" value="">
			  	</div>
				<div class="form-group">
			    	<label for="password">Password:</label>
			    	<input type="password" class="form-control" name="password">
			  	</div>
				<div class="form-group">
			    	<label for="password_confirmation">Password Confirmation:</label>
			    	<input type="password" class="form-control" name="password_confirmation">
			  	</div>
			  	<div>
			  		@include('layouts.partials.skills')
			  	</div>
			  	<br>
			  	<div class="form-group">
			  		<label for="linked_in">Linked in:</label>
			  		<input type="url" class="form-control" name="linked_in"> 
			  	</div>
			  	<div class="form-group">
					<label for="github">Github:</label>
					<input type="url" class="form-control" name="github">
			  	</div>
			  	<div class="form-group">
					<label for="github">Other Links</label>
					<input type="url" class="form-control" name="other_links">
			  	</div>
			  	<div>
			  		<label for="summary">Summary:</label>
			  		<textarea name="content"class="form-control" rows="3"></textarea>
			  	</div>
			  	<br>
			  	<div>
			  		<button type="submit" class="btn btn-primary">Register</button>	
			  	</div>	
			</form>
		</div>
	</div>
@stop