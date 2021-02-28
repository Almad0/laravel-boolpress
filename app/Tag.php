<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  public function article()
    {
        return $this->belongsToMany('App\Article');
        // return $this->belongToMany('App\Tag');
    }

  protected $fillable = ['name'];
}
