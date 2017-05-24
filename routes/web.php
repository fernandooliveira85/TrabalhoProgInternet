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

Route::get('/users', 'UsersController@index');
Route::get('/users/create','UsersController@create');
Route::post('users','UsersController@store');
Route::get('/users/{id}/edit','UsersController@edit');
Route::get('/users/{id}','UsersController@show');
Route::put('users/{id}','UsersController@update');
Route::delete('users/{id}','UsersController@destroy');