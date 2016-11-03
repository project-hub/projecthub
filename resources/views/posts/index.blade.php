@extends('layouts.master')

@section('content')

<div class="container-fluid">
	<h1 class="span4 title">Project Posts</h1>
	<hr>
	{{-- ------------ buttons ------------ --}}

	<div class="row">
		<div class="col-sm-2">
			<div class="skillsBox">
				<h4 class=>Filter:</h4><br>
				<span class="btn filter" data-filter=".category-10">HTML</span>
				<span class="btn filter" data-filter=".category-11">CSS</span>
				<span class="btn filter" data-filter=".category-8">JavaScript</span>
				<span class="btn filter" data-filter=".category-7">Ruby</span>
				<span class="btn filter" data-filter=".category-1">Java</span>
				<span class="btn filter" data-filter=".category-2">Python</span>
				<span class="btn filter" data-filter=".category-3">C</span>
				<span class="btn filter" data-filter=".category-4">C#</span>
				<span class="btn filter" data-filter=".category-5">C++</span>
				<span class="btn filter" data-filter=".category-6">Objective-C</span>
				<span class="btn filter" data-filter=".category-9">PHP</span>
				<span class="btn filter" data-filter=".category-12">SQL</span>
				<span class="btn filter" data-filter=".category-13">Perl</span>
				<br>
				<span class="btn resetBtn" onclick="$('#Container').mixItUp('filter','').mixItUp('filter','all')">Reset</span>
			</div>
		</div>
		{{-- ------------/buttons---------------- --}}
		<div id="Container" class="col-sm-10">
			@foreach($posts as $post)
			{{-- ------ mix / category ------ --}}	
			<div class="mix @foreach($post->skills as $skill) category-{{ $skill->id }} @endforeach" style="display: inline-block;">
				{{-- --------/mix---------------- --}}
				<div class="col-sm-3">
					<a href="{{ action('PostsController@show', $post->id) }}"><img class="  img-responsive" src="https://s3-us-west-2.amazonaws.com/codeup-projecthub/folder/image{{$post->users->id}}" /></a>
				</div>
				<div class="col-sm-9">
					<h4 class="name postTitle">{{ $post->users->company_name }}</h4>
					<h4 class="welcomeSubHeader">{{ $post->title }}</h4>
					<p class="welcomeText">{{ $post->content }}</p>
					<p class="location">Location</p>
					<p class="posted">Posted {{ $post->created_at->diffForHumans() }}</p>
					<a class="posted btn btn-default" href="{{ action('PostsController@show', $post->id) }}" role="button">See More</a>
				</div>
			</div>
			{{-- </div>	 --}}
			@endforeach
		</div>
	</div>


</div>	


@stop