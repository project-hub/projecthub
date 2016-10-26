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


                          {{-- ********this modal was turned off to make changes to edit profile we might add this back in *********** --}}


         {{--        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Profile</h4>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="form-group">
                            <label>Name</label>
                            <input type="Name" class="form-control" id="name" placeholder="Name">
                          </div>
                          <div class="form-group">
                            <label>Address</label>
                            <input type="Address" class="form-control" id="Address" placeholder="Address">
                          </div>                             
                          <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                          </div>
                          <div class="form-group">
                            <label>Phone</label>  
                            <input type="phone" class="form-control" id="Phone" placeholder="Phone number">                                
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                          </div>

                          <div class="form-group">
                            <label>linkedin</label>
                            <input class="form-control" id="" placeholder="url">
                          </div>
                          <div class="form-group">
                            <label>Github</label>
                            <input  class="form-control" id="" placeholder="url">
                          </div>
                          <div class="form-group">
                            <label>other url</label>
                            <input class="form-control" id="" placeholder="url">
                          </div>
                          <div class="form-group">
                            <label>Content</label>
                            <textarea class="form-control" rows="3"></textarea> 
                          </div>
                          <div class="form-group">
                            <label for="exampleInputFile">File upload</label>
                            <input type="file" id="exampleInputFile">
                            <p class="help-block">upload Resume.</p>
                          </div>
                         
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </form>
                        
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div> --}}

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