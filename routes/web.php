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

// ROUTE HOME 
Route::get('/', 'Home\HomeController@index')->name('home');
Route::get('/about', 'Home\HomeController@about')->name('about');
Route::get('/product', 'Home\HomeController@product')->name('product');
Route::get('/service', 'Home\HomeController@service')->name('service');
Route::get('/news', 'Home\HomeController@news')->name('news');
Route::get('/career', 'Home\HomeController@career')->name('career');
Route::get('/contact', 'Home\HomeController@contact')->name('contact');
Route::get('/achievement', 'Home\HomeController@achievement')->name('achievement');
Route::get('/article', 'Home\HomeController@article')->name('article');

// ROUTE PRODUCT
Route::get('/productvalves', 'Product\ProductsController@productvalves')->name('productvalves');
Route::get('/servovalves', 'Product\ProductsController@servovalves')->name('servovalves');

// ROUTE ARTICLE
Route::get('/article1', 'Article\ArticlesController@article1')->name('article1');

// ROUTE ACHIEVEMENT
Route::get('/achievement1', 'Achievement\AchievementsController@achievement1')->name('achievement1');

// ROUTE NEWS
Route::get('/news1', 'News\NewsController@news1')->name('news1');

Auth::routes();
