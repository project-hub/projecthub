<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


//************************************** Posts Views **********************************************
Route::get('/posts/show', function() {
	return view('posts.show');
});

Route::get('/posts/index', function() {
	return view('posts.index');
});

Route::get('/posts/edit', function() {
	return view('posts.edit');
});

Route::get('/posts/create', function() {
	return view('posts.create');
});