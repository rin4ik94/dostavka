<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Region extends Model
{
	use Sluggable;
	
	protected $fillable = [
		'name_ru', 'name_uz'
	];
	public $timestamps = false;

	public function sluggable()
	{
		return [
				'slug' => [
						'source' => 'name_ru'
				]
		];
	}

	public function branches()
	{
		return $this->hasMany('App\Models\Branch');
	}
	
	public function getRouteKeyName()
	{
		return 'slug';
	}
}
