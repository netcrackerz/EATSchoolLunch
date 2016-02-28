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


Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('newapplication', 'HomeController@newapplication');

Route::get('childfield', 'HomeController@childfield');
Route::get('adultfield', 'HomeController@adultfield');
Route::get('addressfield', 'HomeController@addressfield');
Route::get('profile', 'HomeController@profile');
Route::get('review', 'HomeController@review');
Route::get('edit', 'HomeController@edit');

Route::post('submitchild', 'HomeController@submitchild');
Route::post('submitadult', 'HomeController@submitadult');
Route::post('submitaddress', 'HomeController@submitaddress');
Route::post('profileset', 'HomeController@profileset');


Route::get('test', 'HomeController@test');

Route::controllers(['auth' => 'Auth\AuthController',
					'password'=>'Auth\PasswordController']);