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

Auth::routes();

Route::get('/activate/{unique_id}', 'UserController@activate');

Route::get('/home', 'HomeController@index');

# static routes

Route::get('/contact-us', 'StaticController@contact');
Route::get('/global-network', 'StaticController@network');
Route::get('/company', 'StaticController@company');
Route::get('/temporal', 'StaticController@temporal');
Route::get('/return', 'StaticController@returnpage');

# functional routes

Route::get('/lang/{language}', 'LanguageController@changeLanguage');
Route::get('/download/public/{folder}/{path}', 'DownloadController@download');
Route::get('/blocked', 'BlockedController@index');
Route::put('/blocked/{id}', 'BlockedController@accept');
Route::delete('/blocked/{id}', 'BlockedController@decline');

# Resources

Route::resource('products', 'ProductController');
Route::resource('research', 'ResearchController');
// Route::resource('safety_sheets', 'SafetyController');
Route::resource('blacklist', 'BlacklistController', ['except' => ['show', 'edit', 'update']]);
