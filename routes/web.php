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

#root
Route::get('user/{id}','userController@root')->middleware('authenticate_user');
#new user
Route::post('new-user','userController@newUser');
#index
Route::get('/','UserController@index');
#validate-login
Route::post('validate-login', 'UserController@validateuser');
#register
Route::get('register', 'UserController@register');
#logout
Route::get('logout', 'UserController@logout');
