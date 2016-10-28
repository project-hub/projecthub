@extends('layouts.master')

@section('content')

<div class="container">
	
	{{--  ******************** SKILLS SELECT TABLE *************************** --}}
	<div>	
		@include('layouts.partials.skills', ['skills'=>$skills])
	</div>
	{{--  ******************** END SKILLS SELECT TABLE *************************** --}}

	<h1>Project Posts</h1>
	<hr>
	@foreach($posts as $post)
	<div class="row">		
		<div class="col-sm-4">
			<img class=" img-responsive" src="http://fillmurray.com/300/300" />
		</div>
		<div class="col-sm-8">
			<h4>Employer Name</h4>
			<a href="{{ action('PostsController@show', $post->id) }}"><h4>{{ $post->title }}</h4></a>
			<p>{{ $post->content }}</p>
			<p>Location</p>
			<p class="pull-right">{{ $post->created_at->diffForHumans() }}</p>
			<a class="btn btn-default" href="{{ action('PostsController@show', $post->id) }}" role="button">See More</a>
		</div>	
	</div>
	<hr>
	@endforeach
	{!! $posts->render() !!}	
</div>

@stop