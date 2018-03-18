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

Route::get('/gallery', "HomeController@view_art")->name("gallery");
Route::get('/contact', "HomeController@view_hire")->name("contact");
Route::get('/vids', "HomeController@view_videos")->name("vids");
Route::get('/', 'HomeController@index')->name('home');
Route::any('/settings', 'admin@view_dash')->name('settings');
Route::any('/post/create', 'admin@make_post')->name('make_post');
Route::get('/post/{id}', 'HomeController@view_post')->name('view_post');
Route::get('/tags/{id}', 'HomeController@view_post')->name('tag_list');
Auth::routes();
Route::get('/logout', 'HomeController@logout')->name('logout');
