<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    protected $table = 'client';
	public $timestamps = false;
	protected $fillable = ['name', 'email','contact','services','other_services'];
}
