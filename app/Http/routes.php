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


Route::get('/', 'MainController@main');

Route::get('/product', 'MainController@product');

Route::get('/catalogue', 'MainController@catalogue');

Route::get('/news', 'MainController@news');

Route::get('/contact', 'MainController@contact');

Route::get('/member', 'MainController@member');

Route::get('/product', 'MainController@product');