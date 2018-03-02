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


Route::get ('/', 'LibraryController@index');
Route::get ('/insert', 'LibraryController@insert');
Route::get ('/update', 'LibraryController@update');
Route::get ('/insertGenre', 'LibraryController@insertGenre');

Route::post ('/insert', 'InsertController@insertBook');
Route::post ('/delete', 'InsertController@deleteBook');
Route::post ('/update', 'InsertController@updateBook');
Route::post ('/insertGenre', 'InsertController@insertGenre');
