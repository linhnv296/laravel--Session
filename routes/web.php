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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'LoginController@index');
Route::get('/login', 'LoginController@showlogin')->name('show.login');
Route::post('/login', 'LoginController@userlogin')->name('user.login');
Route::get('/logout', 'LogoutController@logout')->name('user.logout');

Route::get('/blog', 'BlogController@showBlog')->name('show.blog');

Route::get('products', 'ProductController@index')->name('index');
Route::get('products/{id}', 'ProductController@show')->name('show');
