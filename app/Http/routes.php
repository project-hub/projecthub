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

// will change as soon as postController is finished
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
// Users Views
Route::get('/users/login', function() {
	return view('users.login');
});

Route::get('/users/create', function() {
	return view('users.create');
});

Route::get('/users/index', function() {
	return view('users.index');
});

Route::get('/users/profile', function() {
	return view('users.profile');
});
