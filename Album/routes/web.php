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

Route::get('/', 'AlbumController@index');
Route::get('/isPermittted', 'AlbumController@create');
Route::get('/presidentailSpeech', 'AlbumController@store');
Route::get('/groupPictures', 'AlbumController@show');
Route::get('/albums', 'AlbumController@edit');
Route::get('/randomPic', 'AlbumController@update');
Route::get('/profiles', 'AlbumController@destroy');
Route::get('/delProfile', 'AlbumController@deleteAlbumFromProfile');
Route::post('/createAlbum', 'AlbumController@createAlbum');
Route::post('/updateAlbum', 'AlbumController@updateAlbum');
Route::get('/deleteAlbum', 'AlbumController@deleteAlbum');
Route::get('/getAlbum', 'AlbumController@getAlbum');
Route::post('/createProfile', 'AlbumController@createProfile');


