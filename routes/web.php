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

Route::get('/',             'FrontController@index');
Route::get('/clubs',        'FrontController@getClublListView');
Route::get('/clubs/{id}',   'FrontController@getClubSingleView');
Route::get('/gallery',      'FrontController@getGalleryView');
Route::get('/contact',      'FrontController@getContactUsView');
Route::get('/help',         'FrontController@getHelpView');

