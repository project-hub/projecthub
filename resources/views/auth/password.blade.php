@extends('layouts.master')
@section('content')
<form method="POST" action="/password/email">
    {!! csrf_field() !!}
    @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
<div class="container">
    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>
    <br>
    <div>
        <button class="btn-primary btn-sm" type="submit">
            Send Password Reset Link
        </button>
    </div>
</div>
</form>
@stop