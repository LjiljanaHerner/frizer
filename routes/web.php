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

Route::get('/', 'PageController@index');
Route::get('/about_us', 'PageController@about_us');
Route::get('/contact', 'PageController@contact');
Route::get('/locations', 'PageController@locations');
Route::get('/galleries', 'PageController@galleries');
Route::get('/hairstyles', 'PageController@hairstyles');
Route::get('/haircut', 'PageController@haircut');
Route::get('/recommendations', 'PageController@recommendations');

