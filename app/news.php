<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
     protected $table = 'news';
	public $timestamps = false;
	protected $fillable = ['news_title', 'news_description','date'];
}
