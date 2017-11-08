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
    return view('pages.index');
});

Route::get('/about', 'PagesController@about');
Route::get('/products', 'PagesController@products');
Route::get('/contact', 'PagesController@contact');

//Route::get('/about', function () {
//return view('pages.about');
//});
// Route::get('/whatwedo', function () {
//     return view('pages.whatwedo');
// });
// Route::get('/users/{id}/{name}', function ($id, $name) {
//     return 'this is user '.$id. ' with a name of '.$name;
// });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
