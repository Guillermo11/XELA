<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $fillable = [
      'name', 'slug', 'description',
  ];

  public function posts()
  {
      return $this->hasMany(Post::class);
  }  //
}
