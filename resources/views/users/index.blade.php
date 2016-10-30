@extends('layouts.master')
@section('title', 'All Users')
@section('content')

<div class="container-fluid">
 <div class="row">
    <div class="col-lg-12">
        <h1 class="page-header title">Project Hub Users
            {{-- <form method="GET" action="{{ action('SkillsController@show') }}">
                <small>@include('layouts.partials.skills', ['skills'=>$skills])</small>
                <button type="submit">enter</button>     
            </form> --}}
        </h1>
    </div>
</div>
@foreach($users as $user)
<div class="row">
    <div class="col-md-4">
        <a href="">
            <img class="userPic img-responsive" src="{{ $user->image }}" alt="User Profile" height="" width="">
        </a>
    </div>
    <div class="col-md-8">
        <h4 class="name postTitle">{{ $user->first_name . " " . $user->last_name }}</h4>
        @if($user->employer == 1)
        <h4>{{ $user->company_name }}</h4>
        @endif

            <h5><a href="{{ $user->email }}">{{ $user->email }}</a></h45>

            <h5>Linked In: <a href="{{ $user->linkedin_id }}">{{ $user->linkedin_id }}</a></h5>

            @if($user->employer == 0)
            <h5>Github: <a href="{{ $user->github }}">{{ $user->github }}</a></h5>
            @endif

            <h5>Website: <a href="{{ $user->website }}">{{ $user->website }}</a></h5>

            <h5>Skills: </h5>
            {{-- @foreach() --}}
            <span class="label label-default">skill badge</span>
            {{-- @endforeach --}}
            <h5>Rating: </h5>
            <p class="welcomeText">{{ $user->content }}</p>
            <a class="btn btn-default" href="{{ action('UsersController@show', $user->id) }}">View Profile <span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
    </div>
    <hr>
    @endforeach
</div>
<div class="text-center">{!! $users->render() !!} </div>
</div>

@stop