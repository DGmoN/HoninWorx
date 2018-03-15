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

Route::get('/gallery', "HomeController@index")->name("gallery");
Route::get('/hire', "HomeController@index")->name("hire");
Route::get('/vids', "HomeController@index")->name("vids");

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
