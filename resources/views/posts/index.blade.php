@extends('layouts.master')

@section('content')

<div class="container">	
	{{-- <div class="row"> --}}
	<div class="col-sm-12">
		<h1 class="page-header title">Project Posts</h1>			
		<h4 class="filterBySkill">Filter By Skill:</h4>
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
	{{-- </div> --}}
	{{-- ------------/buttons---------------- --}}
	<div id="Container" class="container">
		@foreach($posts as $post)
		{{-- ------ mix / category ------ --}}	
		<div class="mix @foreach($post->skills as $skill) category-{{ $skill->id }} @endforeach postsIndex" style="display: inline-block;">
			{{-- --------/mix---------------- --}}
			<div class="row usersBackground">
				<div class="col-sm-3">
					<img class="img-responsive userImgDiv" src="https://s3-us-west-2.amazonaws.com/codeup-projecthub/folder/image{{$post->users->id}}" onerror="this.src='/img/profile_placeholder.png'" height="200" width="200">
				</div>
				<div class="col-sm-9">
					<h4 class="name postTitle">{{ $post->users->company_name }}</h4>
					<h4 class="welcomeSubHeader">{{ $post->title }}</h4>
					<p class="welcomeText">{{ $post->content }}</p>
					<p class="location">@if($post->on_site == 1)
					<p>On Site</p>
					@elseif($post->on_site == 0)
					<p>Off site</p>
					@endif</p>
					@foreach($post->skills as $skill)
					<span class="badge">{{$skill->name}}</span>
					@endforeach
					<p class="posted">Posted {{ $post->created_at->diffForHumans() }}</p>
					<a class="posted btn resetBtn" href="{{ action('PostsController@show', $post->id) }}" role="button">See More</a>
				</div>
			</div>	
		</div>
				@endforeach
	</div>
</div>	
@stop

				{{-- </div>	 --}}

				{{-- <span class="btn resetBtn" onclick="$('#Container').mixItUp('filter','').mixItUp('filter','all')">Reset</span>			 --}}


	{{-- 	<div class="col-sm-4 userImgDiv">
			<img class="img-responsive userImgDiv" src="https://s3-us-west-2.amazonaws.com/codeup-projecthub/folder/image{{$post->users->id}}" onerror="this.src='/img/profile_placeholder.png'">
			<br>
			<a class="posted btn resetBtn" href="{{ action('PostsController@show', $post->id) }}" role="button">See More</a>
		</div>
		<div class="col-sm-8 userContentDiv">
			<h4 class="name postTitle">{{ $post->users->company_name }}</h4>
			<h4 class="welcomeSubHeader">{{ $post->title }}</h4>
			<p class="welcomeText">{{ $post->content }}</p>
			<p class="location">@if($post->on_site == 1)
    								<p>On Site</p>
								@elseif($post->on_site == 0)
    								<p>Off site</p>
								@endif</p>
			<p class="posted">Posted {{ $post->created_at->diffForHumans() }}</p>
		</div> --}}
		


