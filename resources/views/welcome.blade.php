@extends('layouts.master')

@section('content')
{{-- ----------------Jumbotron------------------- --}}
<div class='container'>
  
  <img class="img-responsive" src="img/welcomeJumbotron.jpg" alt="Welcome">
  <hr> 
  <h2 class="header">Project Hub</h2>
  <div class="row">
    <div class="col-sm-4">
      <h4 class="welcomeSubHeader">About Project Hub</h4>
      <p class='welcomeText'>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>
    <div class="col-sm-4">
      <p class="welcomeText">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. 
      </p>
    </div>
    <div class="col-sm-4">
      <p class="welcomeText">
       Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
       tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
       quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
       consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
       cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
       proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
     </p>
   </div>
 </div>

 <hr>

 {{-- ----------------info boxes------------------- --}}
 <div class="row">

   <div class="col-md-6">
   <div class="thumbnail">
      <a href="{{ action('UsersController@index') }}"><img class="thumbs img-responsive" src="img/webProjects.jpg" alt="Welcome">
      <div class="caption">
        <h3 class='developersProjects'>Developers</h3></a>
        <p class="welcomeText">Find the perfect Dev for your project. </p>
        </div>
      </div>
    </div>
    
    <div class="col-md-6">
      <div class="thumbnail">
         <a href="{{ action('PostsController@index') }}"><img class=" thumbs img-responsive" src="img/projectsImage.jpg" alt="Welcome">
        <div class="caption">
         <h3>Projects</h3></a>
         <p class="welcomeText">Check out all the great projects that fit your skill set. </p>         
        </div>
      </div>
    </div>
  </div>    





</div>











@stop



