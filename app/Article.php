<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

// occhio al singfolare in questo caso, mentre plurale nellì'altro caso

  public function category()
    {
      return $this->belongTo('App\Category');
    }

  public function tags()
    {
      return $this->belongToMany(Tag::class);
      // return $this->belongToMany('App\Tag'); versione con il percoso se non è di default
    }


  protected $fillable = ['title', 'body', 'author', 'categories', 'tags'];
}
