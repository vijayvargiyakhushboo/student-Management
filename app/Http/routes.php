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

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('laravel/', 'WelcomeController@index');

Route::get('go_admin/',['as' => 'go_admin', 'uses' => 'LoginController@index']);

Route::get('go_account/',['as' => 'go_account', 'uses' => 'LoginController@index']);

Route::post('check/Login', 'LoginController@checkLogin');
Route::get('add_account/',['as' => 'add_account', 'uses' => 'LoginController@add_account']);


//Route::get('view_account', 'LoginController@view_account');
//Route::get('go_logout', 'LoginController@go_logout');


