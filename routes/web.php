<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Auth::routes();

Route::resource("/api/helpask", "HelpAskController");
Route::resource("/api/info", "InfoController");
Route::resource('/admin', 'AdminController');
Route::get('/', function (){
	return redirect('/home');
});
Route::get('/home', function( ){
	return view('web.home');
});

Route::get('/application', function( ){
		return view('web.application');
});