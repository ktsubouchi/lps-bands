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

Route::get('/', 'SiteController@index');
Route::get('band/create', 'BandController@create');
Route::post('band/store', 'BandController@store');
Route::post('band/{id}/delete', 'BandController@delete');
Route::get('band/{id}/edit', 'BandController@edit');
Route::post('band/{id}/update', 'BandController@update');

Route::get('albums', 'SiteController@albums');
Route::get('album/create', 'AlbumController@create');
Route::post('album/store', 'AlbumController@store');
Route::post('album/{id}/delete', 'AlbumController@delete');
Route::get('album/{id}/edit', 'AlbumController@edit');
Route::post('album/{id}/update', 'AlbumController@update');

Route::group(['prefix' => 'ajax'], function(){
	Route::get('bands', 'BandController@ajaxGetBands');
	
	Route::get('albums', 'AlbumController@ajaxGetAlbums');
});
