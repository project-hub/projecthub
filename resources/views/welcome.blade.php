@extends('layouts.master')

@section('content')
{{-- ----------------Jumbotron------------------- --}}
<div class="container-fluid">
  <div class="row">

    <div class="phDiv col-sm-12">
    <div class="container">
      <h2 class="text-center phWelcome">Project Hub</h2>
      {{-- <p class="aboutText text-center connecting">Connecting employers and developers!</p>  --}}
    </div>
      <br>
      <div class="row">
        <div class="container text-center">
          <button type="button" class="btn resetBtn startedProjectsBtn btn-lg"><a href="{{ action('UsersController@index') }}" class="welcomeBtnLink">Developers</a></button>

          <button type="button" class="btn resetBtn startedProjectsBtn btn-lg"><a href="{{ action('Auth\AuthController@getRegister') }}" class="welcomeBtnLink">Get Started</a></button>

          <button type="button" class="btn resetBtn startedProjectsBtn btn-lg"><a href="{{ action('PostsController@index') }}" class="welcomeBtnLink">Projects</a></button>  
        </div>
      </div>
    </div>


  </div>
</div>




@stop



