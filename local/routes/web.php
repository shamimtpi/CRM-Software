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
    return view('frontend.index');
});

Auth::routes();

Route::group(['middleware' => 'auth'],function(){
	Route::get('/home', 'HomeController@index')->name('home');
	Route::resource('siteuser','customuserController');
	Route::get('experpdf/{id}','invoiceController@experpdf')->name('experpdf');
	Route::get('deleteitem/{id}','invoiceController@deleteitem')->name('deleteitem');
	Route::resource('invoice','invoiceController');
	Route::resource('customer','customerController');
	Route::resource('setting','settingController');
	Route::get('/calendar', 'HomeController@calendarData')->name('invoice.calendar');
});

Route::get('/test', function() {
	$item = \App\invoice::first();
    dd($item, $item->items);
});