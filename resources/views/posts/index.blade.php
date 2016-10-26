@extends('layouts.master')

@section('content')

<div class="container">
	
{{--  ******************** SKILLS SELECT TABLE *************************** --}}
<div>	
	@include('layouts.partials.skills')
</div>
{{--  ******************** END SKILLS SELECT TABLE *************************** --}}



	<h1>Posts</h1>
	<div class='container'>

	@foreach($posts as $post)

		<div class="row table well">
			<tr>
				<div class="col-sm-12 text-center">
				<img class="pull-left" src="http://fillmurray.com/150/100" />
					<p>Employer Name</p>
					<a href="{{ action('PostsController@show', $post->id) }}"><p>Title</p></a>
					<p>{{ $post->title }}</p>
					<p>Project Description</p>
					<p>{{ $post->content }}</p>
					<p>Location</p>
					<p class="pull-right">{{ $post->created_at->diffForHumans() }}</p>
				</div>
			</tr>
		</div>
	
	@endforeach
	{!! $posts->render() !!}
	</div>
</div>
	
@stop