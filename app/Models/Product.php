<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'name_uz', 'name_ru', 'image', 'measurement', 'new_price', 'old_price', 'status', 'category_id', 'manager_id'
    ];
    // protected $casts = [
    //     'price' => 'integer',
    //     'old_price' => 'integer'
    // ];
    public function getImage()
    {
        if ($this->image) {
            return '/storage/products/' . $this->image;
        } else {
            return '/desktop/img/001.jpg';
        }
    }
    public function scopeOfManager(Builder $builder, $managerId)
    {
        if (!$managerId) {
            return;
        }
        $builder->where('manager_id', $managerId);
    }
    public function scopeOfCategory(Builder $builder, $categoryId)
    {
        if (!$categoryId) {
            return;
        }
        $builder->where('category_id', $categoryId);
    }
    public function scopeSortByPrice(Builder $builder, $price)
    {

        if (!$price) {
            return;
        }
        $builder->orderBy('new_price');
    }
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

    public function manager()
    {
        return $this->belongsTo('App\Models\Manager');
    }
}
