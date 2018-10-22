<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
	public function branches()
	{
		return $this->hasMany('App\Models\Branch');
	}
	public function getRouteKeyName()
	{
		return 'slug';
	}
}
