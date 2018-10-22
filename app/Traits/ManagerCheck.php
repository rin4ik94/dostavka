<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait ManagerCheck
{
    public function scopeOfManager(Builder $builder, $managerId)
    {
        if (!$managerId) {
            return;
        }
        $builder->where('manager_id', $managerId);
    }
}