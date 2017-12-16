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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['middleware' => ['web']], function () {
  Route::get('/signup', function () {
      return view('signup');
  });

  Route::get('/signin', function () {
      return view('signin');
  });

  Route::post('/signup', [
    'uses' => 'UserController@postSignUp',
    'as' => 'signup'
  ]);

  Route::post('/dashboard', [
    'uses' => 'UserController@getDashboard',
    'as' => 'dashboard'
  ]);
});




//Route::get('/signupp', 'HomeController@signup')->name('signup');
