<?php

namespace App\Traits;

trait HasChildProducts
{
    public function childProducts($managerId, $price)
    {
        if (!$managerId) {
            return;
        }
        $collection = $this->children->map(function ($cat) use ($managerId) {
            return $cat->products->filter(function ($product) use ($managerId) {
                return $product->manager_id == $managerId;
            });
        })->flatten();
        if (!$price) {
            return $collection;
        }
        return $collection->sortBy('new_price');
    }
}
