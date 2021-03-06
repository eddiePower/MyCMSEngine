<?php

//RSS Feed display shown before authentication occurs.
Route::get('/feed','FeedController@start');

Route::controller('auth/password', 'Auth\PasswordController', [
		'getEmail' => 'auth.password.email',
		'getReset' => 'auth.password.reset'
	]);

Route::controller('auth', 'Auth\AuthController', [
			'getLogin' => 'auth.login',
			'getLogout' => 'auth.logout'
	]);

// Delete users route
Route::get('backend/users/{users}/confirm', ['as' => 'backend.users.confirm', 'uses' => 'Backend\UsersController@confirm']);

//index for this will be under backend.users.index for use in views
Route::resource('backend/users', 'Backend\UsersController', ['except' => ['show']]);

Route::get('backend/pages/{pages}/confirm', ['as' => 'backend.pages.confirm', 'uses' => 'Backend\PagesController@confirm']);

Route::resource('backend/pages', 'Backend\PagesController', ['except' => ['show']]);

Route::get('backend/blog/{blog}/confirm', ['as' => 'backend.blog.confirm', 'uses' => 'Backend\BlogController@confirm']);

Route::resource('backend/blog', 'Backend\BlogController');


Route:get('backend/dashboard', ['as' => 'backend.dashboard', 'uses' => 'Backend\DashboardController@index']);
