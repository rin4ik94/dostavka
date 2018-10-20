<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Category extends JsonResource
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
            'id' => $this->id,
            'name' => $name,
            'slug' => $this->slug,
            'position' => $this->position,
            'parent_id' => $this->parent_id,
            'manager_id' => $this->manager_id,
            'products' => Product::collection($this->whenLoaded('products')),
            'parent' => new Category($this->whenLoaded('parent')),
            'children' => Category::collection($this->whenLoaded('children')),
        ];
    }
}
