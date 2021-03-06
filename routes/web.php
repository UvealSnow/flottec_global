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
	Route::get('confirm/{uid}', 'RequestController@confirmEmail');
	Route::put('requests/accept/{id}', 'RequestController@accept');
	Route::put('requests/decline/{id}', 'RequestController@decline');

// Resources
	Route::resource('categories/{category_id}/products', 'ProductController');
	Route::resource('categories', 'CategoryController');
	Route::resource('requests', 'RequestController', ['only' => ['index', 'destroy']]);
	Route::resource('rnd', 'ResearchController');

// Static routes
	Route::get('/contact-us', 'StaticController@contact');
	Route::get('/global-network', 'StaticController@network');
	Route::get('/company', 'StaticController@company');
	Route::get('/temporal', 'StaticController@temporal');
	Route::get('/privacy', 'StaticController@privacy');
	Route::get('/disclaimer', 'StaticController@disclaimer');
	Route::get('/return', 'StaticController@returnpage');

// Dynamic
	Route::get('download/{id}', 'DynamicController@download');
	Route::get('products/{uri}/{name}', 'DynamicController@productShow');
	Route::get('products/{uri}', 'DynamicController@productIndex');
	Route::get('products', 'DynamicController@categories');
	Route::get('research', 'DynamicController@rnd');
	Route::get('product-sheets', 'DynamicController@sds');

// Deletes
	Route::delete('picture/{id}', 'DeleteController@picture');
	Route::delete('document/{id}', 'DeleteController@document');
