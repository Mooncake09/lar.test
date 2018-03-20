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

Route::get('/', 'PostController@index');

Route::post('/post', 'PostController@store');

Route::get('/post/create', 'PostController@create');

Route::get('/post/{id}', 'PostController@show');

Route::get('/post/{id}/edit', 'PostController@edit');

Route::PATCH('/post/{id}', 'PostController@update');

Route::delete('/post/{id}', 'PostController@destroy');

Route::get('/logout', 'Auth\LoginController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
