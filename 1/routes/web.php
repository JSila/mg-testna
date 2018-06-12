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

Route::get('/', 'UsersController@index')->name('home');
Route::get('/users', 'UsersController@new')->name('users.new');
Route::post('/users', 'UsersController@create')->name('users.create');

Route::get('/companies', 'CompaniesController@new')->name('companies.new');
Route::post('/companies', 'CompaniesController@create')->name('companies.create');
