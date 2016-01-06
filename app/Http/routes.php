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

//Routes for configs
Route::resource('/panel/maindata', 'Panel\Configs\MaindataController');
Route::resource('/panel/social', 'Panel\Configs\SocialController');
Route::resource('panel/committees', 'Panel\Configs\CommitteesController');

//Routes for authentication and registration
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auht/register', 'Auth\AuthController@postRegister');

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');

Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('panel', function () {
    return 'Welcome admin';
});
