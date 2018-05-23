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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

    Route::get('/editusers', 'AdminController@editusersform');
    Route::post('/editusers', 'UserController@edit');

    Route::get('/create', 'AdminController@create');
    Route::post('/storemovie', 'MovieController@store');

    Route::get('/editmovies', 'AdminController@editmoviesform');
    Route::post('/editmovies', 'MovieController@editmovies');

    Route::get('/deletemovies', 'AdminController@deletemoviesform');
    Route::post('/deletemovies', 'MovieController@deletemovies');

    Route::get('/deleteusers', 'AdminController@deleteusersform');
    Route::post('/deleteusers', 'UserController@deleteusers');

    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});

Route::get('/editprofile', 'UserController@Profile');
Route::post('/editprofile', 'UserController@updateUser');

Route::get('/editpassword', 'PasswordController@Profile');
Route::post('/editpassword', 'PasswordController@updatePassword');

Route::get('/latestmovies', 'MovieController@latest');

Route::get('/movies/{id}', 'MovieController@show');

Route::post('/watchlist/{watchlistId}/movie/{movieId}', 'HomeController@addMovieToWatchlist')->name('watchlist.movie.add');

Route::delete('/watchlist/{id}', 'HomeController@deleteWatchlist')->name('watchlist.delete');
Route::delete('/watchlist/{watchlistId}/movie/{movieId}', 'HomeController@deleteMovieFromWatchlist')->name('watchlist.movie.delete');