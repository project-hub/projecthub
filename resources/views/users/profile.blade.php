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
                          <form class="form-horizontal" action="http://formspree.io/{{$users->email}}" method="post">
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
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Edit Profile</button>
{{-- @endif --}}

<!-- Modal -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Profile</h4>
    </div>
    <div class="modal-body">

        <form enctype="multipart/form-data" method="POST" action="{{ action('UsersController@update', $users->id) }}">
                              {!! csrf_field() !!}
                              {!! method_field('PUT') !!}
                              <div class="form-group">
                                <label>First Name</label>
                                <input type="Name" class="form-control" id="first_name" name="first_name" value="{{ empty(old('first_name')) ? $users->first_name : old('first_name') }}" placeholder="First Name">
                              </div>
                              <div class="form-group">
                                <label>Last Name</label>
                                <input type="Name" class="form-control" id="last_name" name="last_name" value="{{ empty(old('last_name')) ? $users->last_name : old('last_name') }}" placeholder="Last Name">
                              </div>
                              <div class="checkbox form-group">
                                <label>
                                  <input type="checkbox" name="employer" value="1"> I am an employer
                                </label>
                              </div>
                              <div class="form-group">
                                @include('layouts.partials.skills')
                              </div>
                              <div class="form-group">
                                <label for="name">Company Name:</label>
                                <input type="text" class="form-control" name="company_name" value="{{ empty(old('company_name')) ? $users->company_name : old('company_name') }}" placeholder="Company Name">
                              </div>
                              <div class="form-group">
                                <label>Address</label>
                                <input type="Address" class="form-control" id="Address" name="address" value="{{ empty(old('address')) ? $users->address : old('address') }}" placeholder="Address">
                              </div>
                              <div class="form-group">
                                <label>City</label>
                                <input type="Address" class="form-control" id="City" name="city" value="{{ empty(old('city')) ? $users->city : old('city') }}" placeholder="City">
                              </div>
                              <div class="form-group row">
                                <div class="col-sm-2">
                                  <label for="state" class="col-sm-2 col-form-label">State:</label>
                                  <select class="form-control" id="state" name="state">
                                    <option value="TX">TX</option>
                                    <option value="AK">AK</option>
                                    <option value="AL">AL</option>
                                    <option value="AR">AR</option>
                                    <option value="AZ">AZ</option>
                                    <option value="CA">CA</option>
                                    <option value="CO">CO</option>
                                    <option value="CT">CT</option>
                                    <option value="DC">DC</option>
                                    <option value="DE">DE</option>
                                    <option value="FL">FL</option>
                                    <option value="GA">GA</option>
                                    <option value="HI">HI</option>
                                    <option value="IA">IA</option>
                                    <option value="ID">ID</option>
                                    <option value="IL">IL</option>
                                    <option value="IN">IN</option>
                                    <option value="KS">KS</option>
                                    <option value="KY">KY</option>
                                    <option value="LA">LA</option>
                                    <option value="MA">MA</option>
                                    <option value="MD">MD</option>
                                    <option value="ME">ME</option>
                                    <option value="MI">MI</option>
                                    <option value="MN">MN</option>
                                    <option value="MO">MO</option>
                                    <option value="MS">MS</option>
                                    <option value="MT">MT</option>
                                    <option value="NC">NC</option>
                                    <option value="ND">ND</option>
                                    <option value="NE">NE</option>
                                    <option value="NH">NH</option>
                                    <option value="NJ">NJ</option>
                                    <option value="NM">NM</option>
                                    <option value="NV">NV</option>
                                    <option value="NY">NY</option>
                                    <option value="OH">OH</option>
                                    <option value="OK">OK</option>
                                    <option value="OR">OR</option>
                                    <option value="PA">PA</option>
                                    <option value="RI">RI</option>
                                    <option value="SC">SC</option>
                                    <option value="SD">SD</option>
                                    <option value="TN">TN</option>
                                    <option value="TX">TX</option>
                                    <option value="UT">UT</option>
                                    <option value="VA">VA</option>
                                    <option value="VT">VT</option>
                                    <option value="WA">WA</option>
                                    <option value="WI">WI</option>
                                    <option value="WV">WV</option>
                                    <option value="WY">WY</option>
                                  </select>
                                </div>
                                <div class="form-group col-sm-2">
                                  <label for="zipcode">ZIP:</label>
                                  <input type="text" class="form-control" name="zip_code" value="{{ empty(old('zip_code')) ? $users->zip_code : old('zip_code') }}">
                                </div> 
                              </div>                               
                              <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{ empty(old('email')) ? $users->email : old('email') }}" placeholder="Email">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                              </div>
                              <div class="form-group">
                                <label>Linkedin</label>
                                <input class="form-control" type="url" name="linkedin" value="{{ empty(old('linkedin')) ? $users->linkedin : old('linkedin') }}" placeholder="LinkedIn">
                              </div>
                              <div class="form-group">
                                <label>Github</label>
                                <input  class="form-control" type="url" name="github" value="{{ empty(old('github')) ? $users->github : old('github') }}" placeholder="Github">
                              </div>
                              <div class="form-group">
                                <label>Website</label>
                                <input class="form-control" type="url" name ="website" value="{{ empty(old('website')) ? $users->website : old('website') }}" placeholder="Website">
                              </div>
                              <div class="form-group">
                                <label>Content</label>
                                <textarea class="form-control" rows="3" type="text" name="content">{{ empty(old('content')) ? $users->content : old('content') }}</textarea> 
                              </div>
                              <div class="form-group row">
                                <div class="col-sm-4">
                                  <label for="exampleInputFile">Resume Upload</label>
                                  <input type="file" id="exampleInputFile" name="resume">
                                  <p class="help-block">Upload Resume.</p>
                                </div>
                                <div class="col-sm-4">
                                  <label for="exampleInputFile">Profile Image Upload</label>
                                  <input type="file" id="exampleInputFile" name="resume">
                                  <p class="help-block">Upload Image.</p>
                                </div>
                              </div>
                              <button type="submit" class="btn btn-primary">Save changes</button>
                            </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
</div>
</div>

</div> 
{{-- ------------------create post modal------------------- --}}

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalCreate">
  Create Post
</button>

<!-- Modal -->
<div class="modal fade" id="myModalCreate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Create Post</h4>
    </div>
    <div class="modal-body">
        {{-- -----modal body------- --}}
        
        <form method="POST" action="{{ action('PostsController@store') }}">
            {!! csrf_field() !!}
            {{-- {!! method_field('PUT') !!} --}}
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







{{-- -------------------------------------------- --}}


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