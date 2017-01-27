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

Route::get('/', 'LandingController@index');
Route::get('/info', function(){ 
	phpinfo(); 
});


Auth::routes();

Route::get('/activate/{unique_id}', 'UserController@activate');

Route::get('/home', 'HomeController@index');

# static routes

Route::get('/contact-us', 'StaticController@contact');
Route::get('/global-network', 'StaticController@network');

# functional routes

Route::get('/lang/{language}', 'LanguageController@changeLanguage');
Route::get('/download/public/{folder}/{path}', 'DownloadController@download');
Route::get('/blocked', 'BlockedController@index');
Route::put('/blocked/{id}', 'BlockedController@accept');
Route::delete('/blocked/{id}', 'BlockedController@decline');

# Resources

Route::resource('products', 'ProductController');
Route::resource('research', 'ResearchController');
Route::resource('blacklist', 'BlacklistController', ['except' => ['show', 'edit', 'update']]);
