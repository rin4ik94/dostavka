<?php

namespace App\Http\Resources;

use App\Http\Resources\Product;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryWithProducts extends JsonResource
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
                'position' => $this->position,
                'parent_id' => $this->parent_id,
                'manager_id' => $this->manager_id
                'products'=>Product::collection($this->whenLoaded('products'))
            ];
        }
        return [
            'id' => (string)$this->id,
            'name' => $this->name_uz,
            'position' => $this->position,
            'parent_id' => $this->parent_id,
            'manager_id' => $this->manager_id
            'products'=>Product::collection($this->whenLoaded('products')) 
            ];
    }
}
