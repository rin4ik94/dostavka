<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class ManagerCategory extends Model
{
	use Sluggable;
	protected $table = 'manager_categories';

  protected $fillable = [
      'name_uz', 'name_ru', 'is_supperadmin',
  ];

	public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name_ru'
            ]
        ];
    }
	
	public function managers() {
  	return $this->hasMany('App\Models\Manager');
	}
}
