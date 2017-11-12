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
