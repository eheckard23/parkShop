<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'ShopController@index');

Route::resource('artist', 'ArtistController');
Route::resource('album', 'AlbumController');
Route::resource('track', 'TrackController');

Route::get('/album/create/{id}', 'AlbumController@create');
Route::get('/track/create/{id}', 'TrackController@create');

Route::get('/genre/{genre}', 'AlbumController@genre');

Route::get('/cart', 'CartController@index');
Route::get('/cart/remove/{id}', 'CartController@removeFromCart');
Route::get('/cart/remove-one/{id}', 'CartController@removeOneFromCart');
Route::get('/cart/add-one/{id}', 'CartController@addOneToCart');
Route::get('/cart/{id}', 'CartController@addToCart');

Route::get('/session/delete', 'CartController@deleteSession');
