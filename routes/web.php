<?php

/** [Landing] */
Route::get('/', ['as' => 'landing', 'uses' => 'Route\RouteController@showLanding']);

/** [Login] */
Route::get('/login', ['as' => 'login', 'uses' => 'Route\RouteController@showLogin']);

/** [Register] */
Route::get('/register', ['as' => 'register', 'uses' => 'Route\RouteController@showRegister']);
