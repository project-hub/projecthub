@extends('layouts.master')

@section('content')

<div class="container">
	<h1 class="span4 title">Project Posts</h1>
	<hr>
	{{-- ------------ buttons ------------ --}}

	<div class="row">
		<div class="col-sm-2">
			<span class="span2">Filter:</span>
			<span class="btn filter" data-filter=".category-1">PHP</span>
			<span class="btn filter" data-filter=".category-2">HTML</span>
			<span class="btn filter" data-filter=".category-3">CSS</span>
			<span class="btn filter" data-filter=".category-4">Laravel</span>
			<span class="btn filter" data-filter=".category-5">Java</span>
			<span class="btn filter" data-filter=".category-6">Angular</span>
			<span class="btn" onclick="$('#Container').mixItUp('filter','').mixItUp('filter','all')">Reset</span>
		</div>
		{{-- ------------/buttons---------------- --}}
		<div id="Container" class="col-sm-10">
			@foreach($posts as $post)
			{{-- ------ mix / category ------ --}}	
			<div class="mix @foreach($post->skills as $skill) category-{{ $skill->id }} @endforeach" style="display: inline-block;">
				{{-- --------/mix---------------- --}}
				<div class="col-sm-3">
					<img class="img-responsive" src="https://s3-us-west-2.amazonaws.com/codeup-projecthub/folder/image{{$post->users->id}}" onerror="this.src='/img/profile_placeholder.png'" >
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
					<p class="posted">Posted {{ $post->created_at->diffForHumans() }}</p>
					<a class="posted btn btn-default" href="{{ action('PostsController@show', $post->id) }}" role="button">See More</a>
				</div>
			</div>
			{{-- </div>	 --}}
			@endforeach
		</div>
	</div>
<div class="text-center">{!! $posts->render() !!} </div>

</div>	


@stop