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

Route::get('/welcome', 'WelcomeController@index')->name('welcome');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'AdminController@index')->name('dashboard');

Route::get('/about', 'HomeController@about');
Route::get('/posts', 'HomeController@posts');
Route::get('/comments', 'PagesController@comments');
Route::get('/contact', 'HomeController@contact');
Route::get('/show', 'ChartsController@showChartData');

Route::resource('/posts', 'PostsController');
Route::resource('/comments', 'CommentsController');