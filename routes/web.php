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

Route::get('/','FrontpageController@index')->name('home');
Route::get('/about','FrontpageController@about')->name('about');
Route::get('/tour','FrontpageController@tour')->name('tour');
Route::get('/hotel','FrontpageController@hotel')->name('hotel');
Route::get('/blog','FrontpageController@blog')->name('blog');
Route::get('/contact','FrontpageController@contact')->name('contact');
