@extends('layouts.master')

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
                    <img class="img-responsive" src="http://www.fillmurray.com/200/200" alt="">
                </a>
            </div>
            <div class="col-md-4">
                <h3>Name: </h3>
                <h4>Rating: </h4>
                <h4><a href="">link to users email</a></h4>
                <h4>Address:</h4>
                <h4>Phone: </h4>
            </div>
            <div class="col-md-4">
            	<h4>Linked In:</h4>
            	<h4>Github:</h4>
            	<h4>Other: </h4>
            	<button class="btn btn-primary btn-lg">Edit Profile</button>
            </div>
        </div>
        <hr>
    </div>
    <div class="col-lg-10">
    	<h3>Skills: </h3>
    	<p>skills will go here</p>
    	<h3>Content: </h3>	
    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit aliquam, placeat, laborum ratione eveniet eos ipsam ipsum quidem adipisci, possimus asperiores. Eius natus aut iusto, ipsa sint explicabo eum ipsam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo vitae aut et rerum facilis vel odit quas facere autem unde ratione, possimus praesentium velit delectus aliquid placeat natus. Fugiat, ratione!</p>
    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates ullam itaque nisi, cupiditate blanditiis tenetur minima facilis ipsam facere aspernatur incidunt tempora minus quos adipisci eaque totam beatae, illum! Quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. In enim praesentium et ex quasi molestiae magnam reiciendis mollitia deserunt eum officiis consequatur accusantium, doloribus iste reprehenderit dolorum! Autem earum, aliquam.</p>
    </div>
</div>
@stop