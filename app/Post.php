<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $fillable = [
       'category_id', 'name', 'slug', 'date', 'excerpt', 'description', 'status', 'ruta_file'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


}
