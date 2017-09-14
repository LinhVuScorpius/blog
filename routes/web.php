<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('home');

// Route::get('/', function () {
//     return view('auth.login');
// });
// Route::get('ui/{view}');
Route::get('/auth/{view}', function ($view) {
		if ($view == 'login') {
			if(Auth::check()) {
				// return view('home');
				echo 'ghghghh';
			}
			else {
				return view("auth.{$view}");
			}
		}
});
Route::get('/ui/{view}', function ($view) {
    return view("ui.{$view}");
});
Route::post('/register', ['as' => 'postRegister', 'uses' => 'Auth\RegisterController@register']);
Route::post('/login', ['as' => 'postLogin', 'uses' => 'Auth\LoginController@login']);
Route::get('/logout', ['as' => 'postLogout', 'uses' => 'Auth\LoginController@logout']);
Route::post('/forgotpass', ['as' => 'postForgotPass', 'uses' => 'Auth\ForgotPasswordController@forgotPassword']);
Route::post('/resetpass', ['as' => 'postResetPass', 'uses' => 'Auth\ResetPasswordController@resetPass']);
Route::post('/newposts', ['as' => 'postNewPosts', 'uses' => 'Post\NewPostController@create']);