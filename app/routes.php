<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group(['prefix' => 'api'], function(){
	Route::post('login/auth', 'AuthController@login');
	Route::get('login/destroy', 'AuthController@logout');
	Route::resource('posts','PostController', ['only' => ['store', 'index', 'show']]);
});

Route::get('/', function(){
	return View::make('index');
});
