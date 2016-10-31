@extends('layouts.master')

@section('content')
{{-- ----------------Jumbotron------------------- --}}
<div class='container'>

 <div class="row">
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
        <p class='aboutText'>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation
        </p>
      </div>   
  </div>

 <hr class="">

 {{-- -- ----------------info boxes------------------- --}}
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

</div>

@stop



