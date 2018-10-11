<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Product extends Model
{
	protected $table = 'products';
  protected $fillable = [
    'name_uz', 'name_ru', 'image', 'measurement', 'new_price', 'old_price', 'status','category_id','manager_id'
  ];
  protected $casts = [
    'price' => 'integer',
    'old_price' => 'integer'
    ];

	public function scopeActive(Builder $builder)
    {
        $builder->where('status', 1);
    }
 public function category()
    {
        return $this->belongsTo(Category::class);
    }

        public function scopeOfStatus($query, $status)
    {
        if (!$status) {
            return;
        }
        if ($status == 2) {
            $status = 0;
        }
        $query->where('status', $status);
    }

	public function manager(){
    return $this->belongsTo('App\Models\Manager');
  }
  public function scopeOfCategory($query, $category)
    {
        if (!$category) {
            return;
        }
        $query->where('category_id', $category);
    }
}
