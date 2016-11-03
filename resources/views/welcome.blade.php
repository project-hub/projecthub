@extends('layouts.master')

@section('content')
{{-- ----------------Jumbotron------------------- --}}
<div class="container-fluid">
    <div class="row">
        <div class="phDiv col-sm-6">
            <h2 class="header text-center">Project Hub</h2>
            <p class="aboutText text-center">Connecting employers and developers!</p> 
            <p class=" aboutText text-center"><a href="{{ action('Auth\AuthController@getRegister') }}" class="btn resetBtn">Get started!</a></p>

        </div>
        <div class="row">
                <a href="{{ action('UsersController@index') }}"><div class="phDev col-sm-6">
                  <h3 class='developersProjects'>Developers</h3>
                  <p class="welcomeText">Find the perfect Dev for your project. </p>
                </div></a>
                <a href="{{ action('PostsController@index') }}"><div class="phProjects col-sm-6">
                  <h3>Projects</h3>
                  <p class="welcomeText">Check out all the great projects that fit your skill set. </p>
                </div></a>
        </div>
        </div>
    </div>
</div>


 {{-- <div class="row">
  <div class="col-sm-12">
    <div class="welcomeImgDiv">
    <h2 class="header text-center">Project Hub</h2>
    </div>
  </div>
</div>

  <hr> 

  <div class="row">
      <div class="col-sm-8 col-sm-offset-2 text-center">
        <h4 class="welcomeSubHeader">About Project Hub</h4>
        <p class="aboutText text-justify">
          Project Hub was was designed to connect employers that have web development projects, whether short-term or long-term, with local developers that fit their specific needs. Project Hub allows employers to seek out developers that have the skills needed for their project while allowing developers to search for projects that fit their skill set.
        </p>
        <p class="aboutText">Project Hub connecting employers and developers!</p> 
        <p class="aboutText"><a href="{{ action('Auth\AuthController@getRegister') }}">Get started!</a></p>
      </div>   
  </div>

 <hr class="">

  ----------------info boxes-------------------
   <div class="row">
       <div class="col-md-6"> 
        <div class="thumbnail">
            <a href="{{ action('UsersController@index') }}"><img class="thumbs img-responsive" src="img/webProjects.jpg" alt="Welcome"></a>
          <div class="caption">
            <div class="well captionWells">
              <h3 class='developersProjects'>Developers</h3>
              <p class="welcomeText">Find the perfect Dev for your project. </p>
            </div>
          </div>
        </div>
    </div>
    <div class="col-md-6">
      <div class="thumbnail">
         <a href="{{ action('PostsController@index') }}"><img class=" thumbs img-responsive" src="img/projectsImage.jpg" alt="Welcome"></a>
        <div class="caption">
          <div class="well captionWells">
         <h3>Projects</h3>
         <p class="welcomeText">Check out all the great projects that fit your skill set. </p>  
         </div>     
        </div>
      </div>
    </div>
  </div>
 --}}

@stop



