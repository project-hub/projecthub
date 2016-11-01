<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>@yield('title')</title>
    {{-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>

    {{-- -----jquery---- --}}
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    {{-- -----mix it up----- --}}
    <script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
   {{-- ----- bootstrap ----  --}}
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    {{-- ----- fancy dropdown ---- --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js" type="text/javascript" charset="utf-8" async defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.min.js" type="text/javascript" charset="utf-8" async defer></script>
    
    <script src="/js/main.js"></script>


</head>
<body>
    <div id="wrapper">
        @include('layouts.partials.navbar')
        <div class="container">
            @if(session()->has('SUCCESS_MESSAGE'))
                <div class="alert alert-success">
                    <p>{{ session('SUCCESS_MESSAGE') }}</p>
                </div>
            @endif
            @if(session()->has('ERROR_MESSAGE'))
                <div class="alert alert-danger">
                    <p>{{ session('ERROR_MESSAGE') }}</p>
                </div>
            @endif
            @yield('content')
        </div>
    </div>
    <div id="push"></div>
    @include('layouts.partials.footer')
</body>
</html>