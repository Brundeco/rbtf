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


Route::get('/', 'PagesController@home');

Route::get('/fed', 'PagesController@fed');

Route::get('/davis', 'PagesController@davis');



Route::resource('/sponsors', 'SponsorsController');

// Route::get('/sponsors', 'SponsorsController@index');

// Route::get('/sponsors/create', 'SponsorsController@create');

// Route::get('/sponsors/{sponsor}', 'SponsorsController@show');

// Route::post('/sponsors', 'SponsorsController@store');

// Route::get('/sponsors/{sponsor}/edit', 'SponsorsController@edit');

// Route::patch('/sponsors/{sponsor}', 'SponsorsController@update');

// Route::delete('/sponsors/{sponsor}', 'SponsorsController@destroy');


