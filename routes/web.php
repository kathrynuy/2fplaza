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


// Route::resource('admin', 'AdminController');
// Route::get('admin', 'AdminController@index');
// Route::resource('menu', 'MenuController');
// Route::resource('meal-order', 'MealOrderController');

// Redirect users to log in page when trying to access the following pages if not logged in
Route::group(['middleware' => 'authenticated'], function(){
  Route::resource('admin', 'AdminController');
  // Route::get('admin', 'AdminController@index');
  Route::resource('menu', 'MenuController');
  Route::resource('meal-order', 'MealOrderController');
});


Auth::routes();

Route::get('/home', 'HomeController@index');
