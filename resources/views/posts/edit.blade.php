@extends('layouts.master')

@section('content')

<div class="container">
	<h1>Show Post</h1>
	<img src="http://fillmurray.com/150/100">
	<h1>Employer Name</h1>

{{--  ******************** SKILLS SELECT TABLE *************************** --}}
<div>	
	@include('layouts.partials.skills')
</div>
{{--  ******************** END SKILLS SELECT TABLE *************************** --}}



	<div class='container'>
		<div class="row table well">

{{-- @include('layouts.partials.skills') --}}
			<form class="form" method="POST" action="">
				{!! csrf_field() !!}
				{!! method_field('PUT') !!}
				Content: <textarea class="form-control" name="description" rows="5" cols="40" ></textarea>
				Location: <input class="form-control" type="text" name="location" value="">
				<input class="btn-success btn" type="submit">
			</form>
	
		</div>
	</div>
</div>
	
@stop