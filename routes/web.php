<?php

use Illuminate\Support\Facades\Route;

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


Route::get("/", 'PageController@home')->name('home');


Route::resource('articles', 'ResourceController\ArticleController');
// Route::resource('categories', 'ResourceController\CategoryController');
// Route::resource('tags', 'ResourceController\TagController');

// Route::get("articles_api", 'PageController@articles_api')->name('articles');
// Route::get("categories_api", 'PageController@categories_api')->name('categories');
// Route::get("tags_api", 'PageController@tags_api')->name('tags');
