<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\Storage;
use App\Traits\ManagerCheck;

class Product extends Model
{
    use Sluggable, ManagerCheck;
    protected $fillable = [
        'name_uz', 'name_ru', 'slug', 'image', 'measurement', 'new_price', 'old_price', 'status', 'category_id', 'manager_id'
    ];
    protected $casts = [
        'new_price' => 'integer'
        ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name_ru'
            ]
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getImage()
    {
        if ($this->image) {
            return '/storage/products/' . $this->image;
        } else {
            return '/desktop/img/001.jpg';
        }
    }

    public function scopeOfCategory(Builder $builder, $categoryId)
    {
        if (!$categoryId) {
            return;
        }
        $builder->where('category_id', $categoryId);
    }

    public function scopeActive(Builder $builder)
    {
        $builder->where('status', 1);
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

    // relations
    public function manager()
    {
        return $this->belongsTo('App\Models\Manager');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class)
            ->withPivot(['product_name', 'product_count', 'product_price', 'product_total_price', 'product_measurement']);
    }

    public function removeProductImage()
    {
        if ($this->image != null) {
            Storage::delete('public/products/' . $this->image);
            $this->image = null;
            $this->save();
        }
    }
}
