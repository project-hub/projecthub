@extends('layouts.master')

@section('content')

<div class="container-fluid">
   <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Project Hub Users
                <small>All Users</small>
            </h1>
        </div>
	</div>
 	<div class="row">
            <div class="col-md-4">
                <a href="">
                    <img class="img-responsive" src="http://www.fillmurray.com/200/200" alt="">
                </a>
            </div>
            <div class="col-md-8">
                <h3>Username</h3>
                <h4><a href="">link to users email</a></h4>
                <h4>Skills: </h4>
                <h4>Rating: </h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae praesentium harum, ducimus itaque quam magni sunt. Nesciunt nam fuga et, molestias, dolore eligendi sit hic tempora quibusdam molestiae. Exercitationem, quod.</p>
                <a class="btn btn-primary" href="">View Profile <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <hr>
    </div>
    <div class="text-center">pagination{{-- {!! $posts->appends(['search' => Request::get('search')])->render() !!} --}}</div>
</div>


@stop