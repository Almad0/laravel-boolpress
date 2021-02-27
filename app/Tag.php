<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  public function category()
    {
        return $this->belongToMany('App\Article');
        // return $this->belongToMany('App\Tag');
    }

  protected $fillable = ['name'];
}
