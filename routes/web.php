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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/',function(){
	return view('template');
});

Route::resource('/booking','BookingListController');
Route::resource('/company','CompanyController');


Route::post('/companyregister','CompanyController@store')->name('companyregister');
Route::get('/companycreate','CompanyController@create');
Route::resource('/company','CompanyController');
// Route::get('/login','auth\LoginController');

Route::get('/login',function(){
	return view('auth\login');
});

Route::post('/login/user','Auth\LoginController@login');

Route::get('/companylogin',function(){
	return view('companylogin');
});

Route::get('/adminlogin',function(){
	return view('adminlogin');
});

Route::get('/bookingstatus', 'BookingListController@update');

Route::post('/booking','BookingListController@bookingupdate')->name('bookingupdate');

Route::get('/userregister',function(){
	return view('userregister');	
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('setting/updaterole',['uses'=>'BookingListController@doUpdateAccessRole','as'=>'updateaccessrole']);


//login for mentor
Route::get('/login/company','Auth\LoginController@CompanyLoginform')->name('login.company');
Route::post('/login/company','Auth\LoginController@CompanyLogin');

Route::get('/mail', 'MailController@home');
Route::post('send/email', 'MailController@sendemail');

