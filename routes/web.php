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

Route::resource('users', 'UserController');
// Route::resource('/guests', 'GuestController');
Route::resource('/menu', 'MenuController');
Route::resource('/admin', 'AdminController');

Auth::routes();

Route::get('/home', 'HomeController@index');
