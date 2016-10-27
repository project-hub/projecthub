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

// Route to UsersController for users.
Route::resource('users', 'UsersController', ['except' => ['create', 'store']]);

// Route to PostsController for posts.
Route::resource('posts', 'PostsController');
// Route to SkillsController for skills.
Route::resource('skills', 'SkillsController');

// Route to AuthController.
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//************************************** Home Page **********************************************
Route::get('/', function () {
    return view('welcome');
});