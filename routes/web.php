<?php

/** [Landing] */
Route::get('/', ['as' => 'landing', 'uses' => 'Route\RouteController@showLanding']);

/** [Login] */
Route::get('/login', ['as' => 'login', 'uses' => 'Route\RouteController@showLogin']);
Route::post('/login', ['as' => 'login', 'uses' => 'Auth\AuthController@doLogin']);

/** [Register] */
Route::get('/register', ['as' => 'register', 'uses' => 'Route\RouteController@showRegister']);
Route::post('/register', ['as' => 'register', 'uses' => 'Auth\AuthController@doRegister']);

Route::group(['middleware' => 'auth'], function () {
   Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'Route\RouteController@showDashboard']);
});
