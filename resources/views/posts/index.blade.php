@extends('layouts.master')

@section('content')

<div class="container">
	<h1 class="span4 title">Project Posts</h1>
	<hr>
	<div class="row">
		<div class="col-sm-2">
			<div class="checkbox">
				<input id="checkbox1" type="checkbox" class="btn filter" data-filter="all">
				<span>ALL</span>
			</div>
			<div class="checkbox">
				<input id="checkbox2" type="checkbox" class="btn filter" data-filter=".category-1">
				<span>PHP</span>
			</div>
			<div class="checkbox">
				<input id="checkbox3" type="checkbox" class="btn filter" data-filter=".category-2">
				<span>HTML</span>
			</div>
			<div class="checkbox">
				<input id="checkbox4" type="checkbox" class="btn filter" data-filter=".category-3">
				<span>CSS</span>
			</div>
			<div class="checkbox">
				<input id="checkbox5" type="checkbox" class="btn filter" data-filter=".category-4">
				<span>LARAVEL</span>
			</div>
			<div class="checkbox">
				<input id="checkbox6" type="checkbox" class="btn filter" data-filter=".category-5">
				<span>JAVA</span>
			</div>
			<div class="checkbox">
				<input id="checkbox7" type="checkbox" class="btn filter" data-filter=".category-6">
				<span>ANGULAR</span>
			</div>
			<div class="checkbox">
				<input id="checkbox8" type="checkbox" class="btn filter" data-filter="None">
				<span>NONE</span>
			</div>

		</div>
		{{-- ------------ buttons ------------ --}}
{{-- 	<div class="group">
		<label>Filter:</label>
		<span class="btn filter" data-filter="all">All</span>
		<span class="btn filter" data-filter=".category-1">PHP</span>
		<span class="btn filter" data-filter=".category-2">HTML</span>
		<span class="btn filter" data-filter=".category-3">CSS</span>
		<span class="btn filter" data-filter=".category-4">Laravel</span>
		<span class="btn filter" data-filter=".category-5">Java</span>
		<span class="btn filter" data-filter=".category-6">Angular</span>
		<span class="btn filter" data-filter="none">None</span>
	</div> --}}
	{{-- ------------/buttons---------------- --}}
	<div id="Container" class="col-sm-10">
		@foreach($posts as $post)
		{{-- ------ mix / category ------ --}}	
		<div class="mix @foreach($post->skills as $skill) category-{{ $skill->id }} @endforeach" style="display: inline-block;">
			{{-- --------/mix---------------- --}}
			<div class="col-sm-4">
				<a href="{{ action('PostsController@show', $post->id) }}"><img class="  img-responsive" src="http://fillmurray.com/400/300" /></a>
			</div>
			<div class="col-sm-8">
				<h4 class="name postTitle">Employer Name</h4>
				<h4 class="welcomeSubHeader">{{ $post->title }}</h4>
				<p class="welcomeText">{{ $post->content }}</p>
				<p class="location">Location</p>
				<p class="posted">Posted {{ $post->created_at->diffForHumans() }}</p>
				{{-- -------skills badges------ --}}
				<h5>Skills: </h5>
				@foreach($post->skills as $skill)
				<span class="badge">{{$skill->name}}</span>
				@endforeach
				{{-- ----------/badges--------- --}}
				<br>
			</div>
			<a class="posted btn btn-default" href="{{ action('PostsController@show', $post->id) }}" role="button">See More</a>
		</div>
		{{-- </div>	 --}}
		<hr>
		@endforeach
	</div>
	{!! $posts->render() !!}
</div>	
</div>

@stop