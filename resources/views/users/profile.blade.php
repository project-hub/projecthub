@extends('layouts.master')
@section('title', 'User Profile')
@section('content')
<div class="container-fluid">
   <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">User Profile</h1>
        </div>
	</div>
 	<div class="row">
            <div class="col-md-4">
                <a href="">
                    <img class="img-responsive" src="{{ $users->image }}" alt="">
                </a>
            </div>
            <div class="col-md-4">

                <h4>{{ $users->first_name . " " . $users->last_name }}</h4>
                @if( $users->employer == 1)
                <h4>{{ $users->company_name }}</h4>
                @endif
                <p>{{ $users->address }}</p>
                <p>{{ $users->city . ", " . $users->state . "  " . $users->zip_code }}</p>
                <h5>Member Since: {{ $users->created_at->diffForHumans() }}</h5>
                <h5>Rating: </h5>
            </div>
            <div class="col-md-4">
              <br>
            	<h5>Linked In: <a href="{{ $users->linkedIn }}">{{ $users->linkedIn }}</a></h5>
              @if($users->employer == 0)
            	<h5>Github: <a href="{{ $users->github }}">{{ $users->github }}</a></h5>
              @endif
            	<h5>Website: <a href="{{ $users->website }}">{{ $users->website }}</a></h5>

              <!-- Email Button trigger modal -->
              <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal1">
               <i class="fa fa-envelope" aria-hidden="true"></i> 
              </button>
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
                              <form class="form-horizontal" action="http://formspree.io/htrevino29@gmail.com" method="post">
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
                <!-- Button trigger modal -->
                {{-- @if (Auth::id() == $users->id) --}}
                <button type="button" class="btn btn-primary btn-lg">
                  Edit Profile
                </button>
                {{-- @endif --}}
                <!-- Modal -->
         
            </div>
        </div>
        <hr>
    </div>
    <div class="col-lg-10">
    	<h3>Skills: </h3>
      <span class="label label-default">skill badge</span>
    	<h3>Summary: </h3>	
    	<p>{{ $users->content }}</p>
    </div>
</div>
@stop