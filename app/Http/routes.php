<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', 'BaseController@main');

Route::get('/product', 'BaseController@product');

Route::get('/catalogue', 'BaseController@catalogue');

Route::get('/news', 'BaseController@news');

Route::get('/contact', 'BaseController@contact');

Route::get('/member', 'BaseController@member');

Route::get('/product', 'BaseController@product');