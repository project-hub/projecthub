@extends('layouts.master')

@section('content')

<div class="container">
	<div class="checkbox">
		<label>
			<input type="checkbox" value="">
	    		HTML
	  	</label>
	</div>
	<div class="checkbox">
		<label>
			<input type="checkbox" value="">
	    		CSS
	  	</label>
	</div>
	<div class="checkbox">
		<label>
			<input type="checkbox" value="">
	    		PHP
	  	</label>
	</div>
	<h1>Posts</h1>
	<div class='container'>
	<div class="row table well">
		<tr>
			<div class="col-sm-12 text-center">
			<img class="pull-left" src="http://fillmurray.com/150/100" />
				<p>Employer Name</p>
				<p>Project Description</p>
				<p>Location</p>
				<p class="pull-right">Most Recent</p>
			</div>
		</tr>
	</div>
	<div class="row table well">
		<tr>
			<div class="col-sm-12 text-center">
			<img class="pull-left" src="http://fillmurray.com/150/100" />
				<p>Employer Name</p>
				<p>Project Description</p>
				<p>Location</p>
				<p class="pull-right">Created_at</p>
			</div>
		</tr>
	</div>
	<div class="row table well">
		<tr>
			<div class="col-sm-12 text-center">
			<img class="pull-left" src="http://fillmurray.com/150/100" />
				<p>Employer Name</p>
				<p>Project Description</p>
				<p>Location</p>
				<p class="pull-right">Created_at</p>
			</div>
		</tr>
	</div>

	</div>
</div>
	
@stop