<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
  protected $fillable = [
  'name','description','date','ruta_Photo',

];
}
