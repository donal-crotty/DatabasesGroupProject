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

Route::get('/about', 'PagesController@about');
Route::get('/posts', 'PagesController@posts');
Route::get('/comments', 'PagesController@comments');
Route::get('/contact', 'PagesController@contact');

Route::get('protected', ['middleware' => ['auth', 'admin'], function() {
    return "this page requires that you be logged in as an Admin";
}]);