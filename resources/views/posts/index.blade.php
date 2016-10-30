@extends('layouts.master')

@section('content')

<div class="container">
	
	{{--  ******************** SKILLS SELECT TABLE *************************** --}}
	<div class='pull-right'>	
		@include('layouts.partials.skills', ['skills'=>$skills])
	</div>
	{{--  ******************** END SKILLS SELECT TABLE *************************** --}}

	<h1 class=" span4 title">Project Posts</h1>
	<hr>
	@foreach($posts as $post)
	<div class="row">		
		<div class="col-sm-4">
			<a href="{{ action('PostsController@show', $post->id) }}"><img class="  img-responsive" src="http://fillmurray.com/400/300" /></a>
		</div>

		<div class="col-sm-8">
			<h4 class="name postTitle">Employer Name</h4>
			<h4 class="welcomeSubHeader">{{ $post->title }}</h4>
			<p class="welcomeText">{{ $post->content }}</p>
			<p class="location">Location</p>
			<p class="posted">Posted {{ $post->created_at->diffForHumans() }}</p>
			<a class="posted btn btn-default" href="{{ action('PostsController@show', $post->id) }}" role="button">See More</a>
		</div>	
	</div>
	<hr>
	@endforeach
	{!! $posts->render() !!}	
</div>

@stop