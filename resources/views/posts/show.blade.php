@extends('layouts.master')
@section('title', 'Post')
@section('content')

<div class="container-fluid">
 <div class="row">
    <div class="col-lg-12">
        <h1 class="page-header title">Job Postings</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <img class="img-responsive" src="https://s3-us-west-2.amazonaws.com/codeup-projecthub/folder/image{{$post->users->id}}" onerror="this.src='/img/profile_placeholder.png'" >
            <h5>Skills Needed: </h5>
            @foreach($post->skills as $skill)
            <span class="badge">{{$skill->name}}</span>
            @endforeach
    </div>
    <div class="col-md-8">
        <h3>{{ $post->title}}</h3>
        <h5>Created by: <a href="{{ action('UsersController@show', $post->users->id )}}">{{ $post->users->company_name }}</a></h5>
        <h5>Posted {{ $post->created_at->diffForHumans() }}</h5>
        @if($post->on_site == 1)
            <p>On Site</p>
        @elseif($post->on_site == 0)
            <p>Off site</p>
        @endif
        <h5>Website: <a href="{{ $post->users->website }}">{{ $post->users->website }}</a></h5>
        <h4>Project Description:</h4>
        <p class="welcomeText">{{ $post->content }}</p>
        <a class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Contact Employer <i class="fa fa-envelope" aria-hidden="true"></i></a>
    </div>
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalCreate">
      Edit Post
    </button>
    <hr>
</div>


    {{-- ------------------edit post modal------------------- --}}

<!-- Button trigger modal -->
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
                <div class="checkbox form-group">
                    <label><input type="checkbox" name="location" value="1">On Site</label>
                    <input type="hidden" name="on_site" value="0">
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

      <!-- Email Button trigger modal -->
     <!-- Modal -->
     <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{-- -------------- EMAIL MODAL ------------------ --}}
            <h4 class="modal-title" id="myModalLabel">Send Message</h4>
          </div>
          <div class="modal-body">
            {{-- -----body-- --}}

            <div class="container">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="well well-sm">
                    <form class="form-horizontal" action="http://formspree.io/" method="post">
                      <fieldset>
                        <legend class="text-center">Email</legend>

                        <!-- Name input-->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="name">Name</label>
                          <div class="col-md-9">
                            <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                          </div>
                        </div>

                        <!-- Email input-->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="email">Your E-mail</label>
                          <div class="col-md-9">
                            <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
                          </div>
                        </div>

                        <!-- Message body -->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="message">Your message</label>
                          <div class="col-md-9">
                            <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
                          </div>
                        </div>

                        <!-- Form actions -->
                        <div class="form-group">
                          <div class="col-md-12 text-right">
                            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                          </div>
                        </div>
                      </fieldset>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            {{-- ---end modal body------ --}}
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

          </div>
        </div>
      </div>
    </div>

@stop