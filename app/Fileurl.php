<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fileurl extends Model
{
  protected $table = 'fileurls';

  protected $fillable = ['title', 'description', 'url', 'password'];

  public function transurl()
  {
    return $this->belongsTo('App\Transurl');
  }
}
