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
Route::get("/article", 'PageController@article')->name('article');
Route::get("/tag", 'PageController@tag')->name('tag');

Route::resource('article', 'ArticleController');
Route::resource('category', 'CategoryController');
Route::resource('tag', 'TagController');

Route::get("articles_api", 'PageController@articles_api')->name('article_api');
Route::get("categories_api", 'PageController@categories_api')->name('category_api');
Route::get("tags_api", 'PageController@tags_api')->name('tag_api');
