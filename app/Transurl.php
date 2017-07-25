<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transurl extends Model
{
  protected $table = 'transurls';

  protected $fillable = ['name', 'email', 'type'];
}
