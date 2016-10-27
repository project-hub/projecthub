@extends('layouts.master')

@section('content')

<div class="container">
	<h1>Show Post</h1>
	<div class='container'>
		<div class="row table well">
			<tr>
				<div class="col-sm-12 text-center">
				<img class="pull-left" src="http://fillmurray.com/150/100" />
					<p>Employer Name</p>
					<p>Title</p>
					<p>{{ $post->title }}</p>
					<p>Project Description</p>
					<p>{{ $post->content }}</p>

					@if($post->on_site == 1)
						<p>On Site</p>
					@elseif($post->on_site == 0)
						<p>Off site</p>
					@endif


					<p class="pull-right">{{ $post->created_at->diffForHumans() }}</p>
				</div>
				<p class="pull-left">Skill Skill Skill Skill</p>
			</tr>
		</div>
	</div>
</div>
	
@stop