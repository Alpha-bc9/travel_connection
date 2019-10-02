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


Route::get('/','FrontpageController@index')->name('homepage');
Route::get('/about','FrontpageController@about')->name('about');
Route::get('/tour','FrontpageController@tour')->name('tour');
Route::get('/hotel','FrontpageController@hotel')->name('hotel');
Route::get('/blog','FrontpageController@blog')->name('blog');
Route::get('/contact','FrontpageController@contact')->name('contact');

Route::resource('/like','LikeController');
Route::resource('/package','PackageController');
Route::resource('/comment','ComentController');

Route::post('/getlike','LikeController@getLike')->name('getlike');
Route::post('/getcomment','ComentController@getComment')->name('getcomment');
Route::post('/getlikecount','LikeController@getLikeCount')->name('getlikecount');
Route::post('/getlikecount','LikeController@getLikeCount')->name('getlikecount');
Route::post('/getuser','FrontpageController@getUser')->name('getuser');



Auth::routes();





Route::get('/home', 'HomeController@index')->name('home');

