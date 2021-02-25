<?php

namespace App\Http\Controllers\API;

use App\Article;
use App\Category;
use App\Tags;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
  public function articles()
  {
    return response()->json([
      'succes' => true,
      'data' => Article::all()
    ], 200);
  }

  public function categories()
  {
    return response()->json([
      'succes' => true,
      'data' => Category::all()
    ], 200);
  }

  public function tags()
  {
    return response()->json([
      'succes' => true,
      'data' => Tag::all()
    ], 200);
  }
}
