<?php

namespace App\Http\Controllers\ResourceController;

use App\Article;
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

        // $articles = Article::all()
        //         ->orderBy('id', 'desc')
        //         ->get();
        // $articles = Article::latest()->get();
        return view('tabsView.Articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('tabsView.Articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $articles = new Article;
      $articles -> title = request('title');
      $articles -> body = request('body');
      $articles -> author = request('author');
      $articles -> categories = request('categories');
      $articles -> tags = request('tags');
      $articles -> save();


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
      return view('tabsView.Articles.edit', compact('article'));
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

      $data = $request->all();
      $article -> update($data);

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
