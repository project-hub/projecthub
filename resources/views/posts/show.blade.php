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

{{-- ------------------create post modal------------------- --}}

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalCreate">
  Edit Post
</button>

<!-- Modal -->
<div class="modal fade" id="myModalCreate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Post</h4>
    </div>
    <div class="modal-body">
        {{-- -----modal body------- --}}
        
        <form method="POST" action="{{ action('PostsController@update', $post->id) }}">
            {!! csrf_field() !!}
            {!! method_field('PUT') !!}
            <div class="form-group">
                <label>Title</label>
                <input  class="form-control" id="" name="title" placeholder="Title">
            </div>
            
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" rows="3" name="content"></textarea> 
            </div>
            <button type="submit" class="btn btn-primary">Post</button>
        </form>








        {{-- -----modal body------- --}}
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
</div>
</div>
</div>

</div>
	
@stop