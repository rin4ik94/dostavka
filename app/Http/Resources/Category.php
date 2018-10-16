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
            return [
                'id' => $this->id,
                'name' => $this->name_uz,
                'slug' => $this->slug,
                'position' => $this->position,
                'parent_id' => $this->parent_id,
                'manager_id' => $this->manager_id,
                'products' => Product::collection($this->whenLoaded('products')),
                'children' => Category::collection($this->children),
            ];
        }
        return [
            'id' => $this->id,
            'name' => $this->name_ru,
            'position' => $this->position,
            'parent_id' => $this->parent_id,
            'manager_id' => $this->manager_id,
            'products' => Product::collection($this->whenLoaded('products')),
            'children' => Category::collection($this->children),

        ];
    }
}
