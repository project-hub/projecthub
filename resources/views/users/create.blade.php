@extends('layouts.master')
@section('title', 'Create/Update Profile')
@section('content')
			<h1>Create Profile:</h1>
	<div class="row">
		<div class="col-md-6">
			<form class="form" method="POST" action="{{ action('PostsController@update', $post->id) }}">
				{!! csrf_field() !!}
				{!! method_field('PUT') !!}
				<div class="form-group">
			    	<label for="name">First Name:</label>
			    	<input type="text" class="form-control" name="first_name">
			  	</div>
			  	<div class="form-group">
			    	<label for="name">Last Name:</label>
			    	<input type="text" class="form-control" name="last_name">
			  	</div>
			  	<div class="checkbox">
    				<label>
      				<input type="checkbox" name="employer" value="1"> I am an employer
    				</label>
  				</div>
			  	<div class="form-group">
			    	<label for="name">Company Name:</label>
			    	<input type="text" class="form-control" name="company_name">
			  	</div>
			  	<div class="form-group">
			    	<label for="name">Address:</label>
			    	<input type="text" class="form-control" name="address">
			  	</div>
			  	<div class="form-group">
			    	<label for="name">City:</label>
			    	<input type="text" class="form-control" name="city">
			  	</div>
			  	<div class="form-group row">
					<div class="col-sm-2">
					<label for="state" class="col-sm-2 col-form-label">State:</label>
						<select class="form-control" id="state" name="state">
							<option value="TX">TX</option>
							<option value="AK">Alaska</option>
							<option value="AL">Alabama</option>
							<option value="AR">Arkansas</option>
							<option value="AZ">Arizona</option>
							<option value="CA">California</option>
							<option value="CO">Colorado</option>
							<option value="CT">Connecticut</option>
							<option value="DC">District of Columbia</option>
							<option value="DE">Delaware</option>
							<option value="FL">Florida</option>
							<option value="GA">Georgia</option>
							<option value="HI">Hawaii</option>
							<option value="IA">Iowa</option>
							<option value="ID">Idaho</option>
							<option value="IL">Illinois</option>
							<option value="IN">Indiana</option>
							<option value="KS">Kansas</option>
							<option value="KY">Kentucky</option>
							<option value="LA">Louisiana</option>
							<option value="MA">Massachusetts</option>
							<option value="MD">Maryland</option>
							<option value="ME">Maine</option>
							<option value="MI">Michigan</option>
							<option value="MN">Minnesota</option>
							<option value="MO">Missouri</option>
							<option value="MS">Mississippi</option>
							<option value="MT">Montana</option>
							<option value="NC">North Carolina</option>
							<option value="ND">North Dakota</option>
							<option value="NE">Nebraska</option>
							<option value="NH">New Hampshire</option>
							<option value="NJ">New Jersey</option>
							<option value="NM">New Mexico</option>
							<option value="NV">Nevada</option>
							<option value="NY">New York</option>
							<option value="OH">Ohio</option>
							<option value="OK">Oklahoma</option>
							<option value="OR">Oregon</option>
							<option value="PA">Pennsylvania</option>
							<option value="PR">Puerto Rico</option>
							<option value="RI">Rhode Island</option>
							<option value="SC">South Carolina</option>
							<option value="SD">South Dakota</option>
							<option value="TN">Tennessee</option>
							<option value="TX">Texas</option>
							<option value="UT">Utah</option>
							<option value="VA">Virginia</option>
							<option value="VT">Vermont</option>
							<option value="WA">Washington</option>
							<option value="WI">Wisconsin</option>
							<option value="WV">West Virginia</option>
							<option value="WY">Wyoming</option>
						</select>
					</div> 
				<div class="form-group col-sm-2">
			    	<label for="email">ZIP:</label>
			    	<input type="text" class="form-control" name="zip_code">
				</div> 
			  	</div>
			  	<div class="form-group">
			  		<label for="linked_in">Linked in:</label>
			  		<input type="url" class="form-control" name="linkedin"> 
			  	</div>
			  	<div class="form-group">
					<label for="github">Github:</label>
					<input type="url" class="form-control" name="github">
			  	</div>
			  	<div class="form-group">
					<label for="github">Other Links</label>
					<input type="url" class="form-control" name="website">
			  	</div>
		</div>
		<div class="col-md-6">
				<div class="form-group">
			    	<label for="email">Email:</label>
			    	<input type="email" class="form-control" name="email">
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
			  	<div>
			  		<label for="summary">Summary:</label>
			  		<textarea name="content" class="form-control" rows="3"></textarea>
			  	</div>
			  	<div class="form-group">
    				<label for="exampleInputFile">File input</label>
    				<input type="file" id="exampleInputFile" name="image">
    				<p class="help-block">Upload Profile Picture</p>
  				</div>
			  	<br>
			  	<div>
			  		<button type="submit" class="btn btn-primary">Save</button>	
			  		<button type="submit" class="btn">Cancel</button>	
			  	</div>
			  	<br>
			</form>
		</div>	
		</div>
	</div>
@stop