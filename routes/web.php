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

Route::get('/', 'LandingController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

// Functional routes
	Route::get('/lang/{language}', 'LanguageController@changeLanguage');

// User registration
	Route::post('user', 'UserController@create');

// Resources
	Route::resource('categories/{category_id}/products', 'ProductController');
	Route::resource('categories', 'CategoryController');
	Route::resource('requests', 'RequestController', ['only' => ['index', 'destroy', 'update']]);

// Static routes
	Route::get('/contact-us', 'StaticController@contact');
	Route::get('/global-network', 'StaticController@network');
	Route::get('/company', 'StaticController@company');
	Route::get('/temporal', 'StaticController@temporal');
	Route::get('/privacy', 'StaticController@privacy');
	Route::get('/disclaimer', 'StaticController@disclaimer');
	Route::get('/return', 'StaticController@returnpage');
