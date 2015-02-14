<?php

// Route model binding
Route::bind('articleId', function($value) {
	return LBlog\Blog\Article::find($value);
});

// Home route
Route::get('/', ['as' => 'home', 'uses' => 'Blog\ArchiveController@index']);

// Blog archive routes
Route::get('/archives', ['as' => 'blog.archives', 'uses' => 'Blog\ArchiveController@index']);

// Blog article routes
Route::get('/article/{articleId}-{articleSlug}', ['as' => 'blog.article', 'uses' => 'Blog\ArticleController@show']);

// Version checking
Route::get('/version', 'VersionController@index');

// Backend
Route::group(['prefix' => 'backend'], function() {
	// Authentication-required routes
	Route::group(['middleware' => 'auth'], function() {
		// Main dashboard
		Route::get('/', ['as' => 'backend', 'uses' => 'Backend\HomeController@index']);

		// Backend articles
		Route::get('/articles', ['as' => 'backend.blog.articles', 'uses' => 'Backend\ArticleController@index']);
		Route::get('/articles/new', ['as' => 'backend.blog.articles.new', 'uses' => 'Backend\ArticleController@create']);

		// File uploads
		Route::post('/upload', ['as' => 'backend.upload', 'uses' => 'Backend\FileController@store']);
	});

	// Authentication
	Route::get('/logout', ['as' => 'backend.logout', 'uses' => 'Backend\AuthController@index']);
	Route::get('/login', ['as' => 'backend.login', 'uses' => 'Backend\AuthController@show']);
	Route::post('/login', 'Backend\AuthController@create');
});