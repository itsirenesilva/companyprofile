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

Route::get('/', 'Home\HomeController@index')->name('home');
Route::get('/about', 'Home\HomeController@about')->name('about');
Route::get('/product', 'Home\HomeController@product')->name('product');
Route::get('/service', 'Home\HomeController@service')->name('service');
Route::get('/news', 'Home\HomeController@news')->name('news');
Route::get('/career', 'Home\HomeController@career')->name('career');
Route::get('/contact', 'Home\HomeController@contact')->name('contact');

Auth::routes();
