<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
       protected $table = 'feedback';
	public $timestamps = false;
	protected $fillable = ['name', 'email','feedback'];
}
