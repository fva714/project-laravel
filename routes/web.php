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

Route::get('/users/index', 'UsersController@index')->name('users.index');

Route::post('/users/create', 'UsersController@create')->name('users.create');

Route::put('/users/{user}/update', 'UsersController@update')->name('users.update');

Route::delete('/users/{user}/destroy', 'UsersController@destroy')->name('users.destroy');
