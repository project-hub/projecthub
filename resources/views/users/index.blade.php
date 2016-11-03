@extends('layouts.master')
@section('title', 'All Users')
@section('content')

<div class="container-fluid">
 <div class="row">
    <div class="col-lg-12">
        <h1 class="page-header title">Project Hub Users</h1>
        <hr>
    </div>
</div>
{{-- ----- --}}
    <div class="row">
        <div class="col-sm-2">
            <div class="skillsBox">
                <h4 class=>Filter By Skill:</h4><br>
                <span class="btn filter" data-filter=".category-10">HTML</span>
                <span class="btn filter" data-filter=".category-11">CSS</span>
                <span class="btn filter" data-filter=".category-8">JavaScript</span>
                <span class="btn filter" data-filter=".category-7">Ruby</span>
                <span class="btn filter" data-filter=".category-1">Java</span>
                <span class="btn filter" data-filter=".category-2">Python</span>
                <span class="btn filter" data-filter=".category-3">C</span>
                <span class="btn filter" data-filter=".category-4">C#</span>
                <span class="btn filter" data-filter=".category-5">C++</span>
                <span class="btn filter" data-filter=".category-6">Objective-C</span>
                <span class="btn filter" data-filter=".category-9">PHP</span>
                <span class="btn filter" data-filter=".category-12">SQL</span>
                <span class="btn filter" data-filter=".category-13">Perl</span>
                <br>
                <span class="btn resetBtn" onclick="$('#Container').mixItUp('filter','').mixItUp('filter','all')">Reset</span>
            </div>
        </div>
{{-- ----- --}}

<div id="Container" class="col-sm-10">


@foreach($users as $user)
@if(Auth::check() == false)
<div class="row">
    <div class="col-md-4">
            <img class="img-responsive" src="https://s3-us-west-2.amazonaws.com/codeup-projecthub/folder/image{{$user->id}}" onerror="this.src='/img/profile_placeholder.png'" style="height: 300px; width: 300px;">
            <h5>Skills: </h5>
            @foreach($user->skills as $skill)
            <span class="badge">{{$skill->name}}</span>
            @endforeach
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

            <p class="welcomeText">{{ $user->content }}</p>
            <a class="btn btn-default" href="{{ action('UsersController@show', $user->id) }}">View Profile <span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
    </div>
    <hr>
@elseif(Auth::user()->employer == 0 && $user->employer == 1)
<div class="row">
    <div class="col-md-4">
            <img class="img-responsive" src="https://s3-us-west-2.amazonaws.com/codeup-projecthub/folder/image{{$user->id}}" onerror="this.src='/img/profile_placeholder.png'" >
            <h5>Skills Needed: </h5>
            @foreach($user->skills as $skill)
            <span class="badge">{{$skill->name}}</span>
            @endforeach
    </div>
    <div class="col-md-8">
        <h4 class="name postTitle">{{ $user->first_name . " " . $user->last_name }}</h4>
        <h4>{{ $user->company_name }}</h4>
            <h5><a href="{{ $user->email }}">{{ $user->email }}</a></h45>
            <h5>Linked In: <a href="{{ $user->linkedin_id }}">{{ $user->linkedin_id }}</a></h5>
            <h5>Website: <a href="{{ $user->website }}">{{ $user->website }}</a></h5>
            <p class="welcomeText">{{ $user->content }}</p>
            <a class="btn btn-default" href="{{ action('UsersController@show', $user->id) }}">View Profile <span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
    </div>
    <hr>
@elseif(Auth::user()->employer == 1 && $user->employer == 0)
<div class="row">
    <div class="col-md-4">
            <img class="img-responsive" src="https://s3-us-west-2.amazonaws.com/codeup-projecthub/folder/image{{$user->id}}" onerror="this.src='/img/profile_placeholder.png'" style="max-height: 300px; max-width: 300px;" >
            <h5>Skills: </h5>
            @foreach($user->skills as $skill)
            <span class="badge">{{$skill->name}}</span>
            @endforeach
    </div>
    <div class="col-md-8">
        <h4 class="name postTitle">{{ $user->first_name . " " . $user->last_name }}</h4>
            <h5><a href="{{ $user->email }}">{{ $user->email }}</a></h45>
            <h5>Linked In: <a href="{{ $user->linkedin_id }}">{{ $user->linkedin_id }}</a></h5>
            <h5>Github: <a href="{{ $user->github }}">{{ $user->github }}</a></h5>
            <h5>Website: <a href="{{ $user->website }}">{{ $user->website }}</a></h5>
            <p class="welcomeText">{{ $user->content }}</p>
            <a class="btn btn-default" href="{{ action('UsersController@show', $user->id) }}">View Profile <span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
    </div>
    <hr>
@endif
@endforeach

</div>

</div>
{{-- <div class="text-center">{!! $users->render() !!} </div> --}}
</div>

@stop