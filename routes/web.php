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
    return view('main');
});

// https://chasacademy.slack.com/archives/G89N8QX32/p1515016329000347
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/movies', function () {
    return view('movies');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/editprofile', 'UserController@Profile');
Route::post('/editprofile', 'UserController@updateUser');

Route::get('/editpassword', 'PasswordController@Profile');
Route::post('/editpassword', 'PasswordController@updatePassword');

Route::get('/search', function () {
    return view('search');
});

Route::resource('/review', 'MovieController');

