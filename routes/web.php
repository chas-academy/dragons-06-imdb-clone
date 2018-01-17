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

// Route::get('/movies', function () {
//     return view('movies');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('admin')->group(function() {
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/editusers', 'AdminController@editusersform')->name('admin.dashboard');
	Route::post('/editusers', 'AdminController@edit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
});

//group this
Route::get('/editprofile', 'UserController@Profile');
Route::post('/editprofile', 'UserController@updateUser');

//group this
Route::get('/editpassword', 'PasswordController@Profile');
Route::post('/editpassword', 'PasswordController@updatePassword');


Route::get('/latestmovies', 'MovieController@latest');

Route::resource('movies', 'MovieController');


Route::get('/home/watchlist', 'UserController@showUserWatchlist');
Route::get('/movie/{movie}/add/{user}', [
    'as' => 'add',
    'uses' => 'UserController@addToWatchlist'
]);
Route::get('/addtest', function() {
    return view('addwatchlist');
});