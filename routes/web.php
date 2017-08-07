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

Route::get('/', 'HomeController@home');
Route::get('profiles', 'StudentsController@profiles');
Route::get('search', 'StudentsController@search');
Route::get('profile/{user}', 'StudentsController@viewProfile');

Route::get('register', 'Auth\RegisterController@viewRegister');
Route::post('register', 'Auth\RegisterController@storeRegister');

Route::get('login', 'Auth\LoginController@login');
Route::post('login', 'Auth\LoginController@authenticate');

Route::model('user', 'App\User');