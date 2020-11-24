<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $table = 'blog';
	public $timestamps = false;
	protected $fillable = ['name','blog_name', 'content1','image','content2','date'];
}
