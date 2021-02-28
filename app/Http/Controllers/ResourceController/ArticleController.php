<?php

namespace App\Http\Controllers\ResourceController;

use App\Article;
use App\Category;
use App\Tag;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $articles = Article::all();
        $articles = Article::orderBy('id', 'desc')->get();
        $categories= Category::all();

        // $articles = Article::all()
        //         ->orderBy('id', 'desc')
        //         ->get();
        // $articles = Article::latest()->get();
        return view('tabsView.Articles.index', compact('articles', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $tags= Tag::all();
      $categories= Category::all();
      return view('tabsView.Articles.create', compact('tags', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $validateData = $request->validate([
        'title' => 'required',
        'body' => 'required',
        'author' => 'required',
        'category_id' => 'required',
        'tag_id' => 'required'
      ]);
      Article::create($validateData);

      $articles = Article::orderBy('id', 'desc')->first();

      // $articles = new Article;
      // $articles -> title = request('title');
      // $articles -> body = request('body');
      // $articles -> author = request('author');
      // // $articles -> categories = request('categories');
      // // $articles -> tags = request('tags');
      // $articles -> save();

      $articles->tags()->attach($request->tags);
      return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
      return view('tabsView.Articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
      $categories = Category::all();
      $tags = Tag::all();

      return view('tabsView.Articles.edit', compact('article', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {

      $validatedData = $request->validate([
        'title' => 'required',
        'body' => 'required',
        'author' => 'required',
        'category_id' => 'required',
        'tag_id' => 'required'
      ]);
      $article->update($validatedData);
      $article->tags()->sync($request->tags);

      return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
      $article -> delete();
      return redirect()->route('articles.index');
    }
}
