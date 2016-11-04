@extends('layouts.master')

@section('content')
{{-- ----------------Jumbotron------------------- --}}
<div class="container-fluid">
    <div class="row">
        <div class="phDiv col-sm-12">
            <h2 class="text-center phWelcome">Project Hub</h2>
            <p class="aboutText text-center connecting">Connecting employers and developers!</p> 
            <br>
            <br>
            <div class="row">
              <div class="col-sm-3 col-sm-offset-1">
            <p class=" aboutText text-center"><a href="{{ action('Auth\AuthController@getRegister') }}" class="btn-lg resetBtn startedProjectsBtn">Get started!</a></p>
              </div>
              <div class="col-sm-3">

            <p class=" aboutText text-center"><a href="{{ action('UsersController@index') }}"class=" btn-lg  resetBtn startedProjectsBtn ">Developers</a></p>
          </div>
          <div class="col-sm-3"1>
            <p class=" aboutText text-center"><a href="{{ action('PostsController@index') }}" class="btn-lg resetBtn startedProjectsBtn">Projects</a></p>
        </div>
        </div>
    </div>
</div>



 
@stop



