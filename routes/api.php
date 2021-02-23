<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('articles', function() {

  return response()->json([
    'succes' => true,
    'data' => App\Article::all()
  ], 200);
  //Post sono gia caricati su una tabella nel nostro database.
  // inswerendo nel browser /api/posts spuntano i dati come un'API
});

Route::get('categories', function() {

  return response()->json([
    'succes' => true,
    'data' => App\Category::all()
  ], 200);
  //Post sono gia caricati su una tabella nel nostro database.
  // inswerendo nel browser /api/posts spuntano i dati come un'API
});

Route::get('tags', function() {

  return response()->json([
    'succes' => true,
    'data' => App\Tag::all()
  ], 200);
  //Post sono gia caricati su una tabella nel nostro database.
  // inswerendo nel browser /api/posts spuntano i dati come un'API
});



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
