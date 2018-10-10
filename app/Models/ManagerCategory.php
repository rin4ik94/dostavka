<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ManagerCategory extends Model
{
	protected $table = 'manager_categories';

  protected $fillable = [
      'name_uz', 'name_ru', 'is_supperadmin',
  ];

	public function managers() {
  	return $this->hasMany('App\Models\Manager');
	}
}
