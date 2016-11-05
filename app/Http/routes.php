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
// Route::resource('users/changepassword','UsersController');
Route::get('/users/changepassword/{id}', function(){
	return view('/users/changepassword');
});

Route::get('/auth/password', function() {
	return view('/auth/password');
});

// Resume Upload
Route::post('users/{id}/upload', 'UsersController@upload');
// Resume Download
Route::post('users/{id}/download', 'UsersController@download');
Route::post('users/{id}/download', 'UsersController@download');

// Profile Pic Upload
Route::post('users/{id}/uploadPic', 'UsersController@uploadPic');


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

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

// Linkedin OAuth routes...
Route::get('auth/linkedin', 'Auth\AuthController@redirectToProvider');
Route::get('auth/linkedin/callback', 'Auth\AuthController@handleProviderCallback');

// Github OAuth routes...
Route::get('auth/github', 'Auth\AuthController@redirectToProviderGithub');
Route::get('auth/github/callback', 'Auth\AuthController@handleProviderCallbackGithub');

//************************************** Home Page **********************************************
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function() {
	return view('/about');
});
// User skills 
Route::post('users/{id}', 'UsersController@userSkills');
// Post skills
Route::post('posts/{id}', 'PostsController@postSkills');

// ********************* EXAMPLE OF HOW SYNC() WORKS ****************************


// Route::get('/test', function () {
// 	$post = App\Models\Post::find(3);
// 	$skill = App\Models\Skill::find(4);
// 	$skills2 = App\Models\Skill::find(5);
// 	$post->skills()->sync([4, 5]);
// });

Route::get('/test', function () {	
	
	$user = App\Models\User::with('skills')->find(11);
	dd($user->skills);
	// foreach ($user as $skill) {
	// 	echo $skill->pivot->name;
	// }
	// $skill = App\Models\Skill::with('User_Skills')->find(2);
	// dd($skill->name);

	// $user->withPivot()
});









