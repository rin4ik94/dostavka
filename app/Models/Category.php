<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Traits\HasChildProducts;
use App\Traits\ManagerCheck;

class Category extends Model
{
    use Sluggable, HasChildProducts, ManagerCheck;

  // protected $guarded = ['id'];
    protected $table = 'categories';
    protected $fillable = ['name_uz', 'name_ru', 'manager_id', 'parent_id', 'status'];

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
        return slug;
    }

    public function manager()
    {
        return $this->belongsTo('App\Models\Manager');
    }
    public function scopeParents(Builder $builder)
    {
        $builder->whereNull('parent_id');
    }
    public function parent()
    {
        return $this->belongsTo('App\Models\Category', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany('App\Models\Category', 'parent_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function scopeActive(Builder $builder)
    {
        $builder->where('status', 1);
    }

    public function scopeOrdered(Builder $builder)
    {
        $builder->orderBy('position');
    }
}
