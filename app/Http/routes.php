<?php

// Home route
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

// Backend
Route::group(['middleware' => 'auth', 'prefix' => 'backend'], function() {
	// Main dashboard
	Route::get('/', ['as' => 'backend', 'uses' => 'Backend\HomeController@index']);

	// Authentication
	Route::get('/login', ['as' => 'backend.login', 'uses' => 'Backend\AuthController@create']);
});