<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Product extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        if ($request->lang == 'uz') {
            return [
                'id' => (string)$this->id,
                'name' => $this->name_uz, 
                'category_id' => $this->category_id,
                'measurement' => $this->measurement,
                'image' => '/storage/products/' . $this->image,
                'new_price' => (integer)$this->new_price,
                'old_price' => (integer)$this->old_price,
                'manager_id' => $this->manager_id,
            ];
        }
        return [
                'id' => (string)$this->id,
                'name' => $this->name_ru, 
                'category_id' => $this->category_id,
                'measurement' => $this->measurement,
                'image' => '/storage/products/' . $this->image,
                'new_price' => (integer)$this->new_price,
                'old_price' => (integer)$this->old_price,
                'manager_id' => $this->manager_id,
            ];
    }
}
