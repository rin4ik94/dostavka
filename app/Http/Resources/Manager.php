<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Branch;

class Manager extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => (string)$this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'logo' => $this->getLogo(),
            'branches' => Branches::collection($this->whenLoaded('branches')),
            'categories' => Category::collection($this->whenLoaded('categories')),
            'cat' => $this->managerCategory->name_ru
        ];
    }
}
