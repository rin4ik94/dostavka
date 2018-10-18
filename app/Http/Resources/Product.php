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
            $name = $this->name_uz;
        } else {
            $name = $this->name_ru;
        }
        return [
            'id' => (string)$this->id,
            'name' => $name,
            'slug' => $this->slug,
            'category_id' => $this->category_id,
            'measurement' => $this->measurement,
            'image' => $this->getImage(),
            'new_price' => (integer)$this->new_price,
            'old_price' => (integer)$this->old_price,
            'manager_id' => $this->manager_id,
        ];

    }
}
