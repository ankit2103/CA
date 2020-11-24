<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news_letter extends Model
{
      protected $table = 'newsletter';
	public $timestamps = false;
	protected $fillable = ['title', 'description'];
}
