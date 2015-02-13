<?php

// Home route
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

// Backend
Route::group(['prefix' => 'backend'], function() {
	// Authentication-required routes
	Route::group(['middleware' => 'auth'], function() {
		// Main dashboard
		Route::get('/', ['as' => 'backend', 'uses' => 'Backend\HomeController@index']);
	});

	// Authentication
	Route::get('/logout', ['as' => 'backend.logout', 'uses' => 'Backend\AuthController@index']);

	Route::get('/login', ['as' => 'backend.login', 'uses' => 'Backend\AuthController@show']);
	Route::post('/login', 'Backend\AuthController@create');
});