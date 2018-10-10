<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table = 'products';
  protected $fillable = [
    'name_uz', 'name_ru', 'image', 'measurement', 'new_price', 'old_price', 'status','category_id','manager_id'
  ];

 public function category(){
    return $this->belongsTo('App\Models\Category');
  }

	public function manager(){
    return $this->belongsTo('App\Models\Manager');
  }
}
