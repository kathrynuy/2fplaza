<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/regitser', function () {
    return view('admin.register');
});

Route::resource('users', 'UserController');
Route::resource('/guests', 'GuestController');

Auth::routes();

Route::get('/home', 'HomeController@index');
