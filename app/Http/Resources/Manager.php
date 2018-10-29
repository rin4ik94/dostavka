<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

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
        if (\Cache::get('lang') == 'uz' || $request->lang == 'uz') {
            $name = $this->managerCategory->name_uz;
        } else {
            $name = $this->managerCategory->name_ru;
        }
        return [
            'id' => (string)$this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'logo' => $this->getLogo(),
            'branches' => Branches::collection($this->whenLoaded('branches')),
            'categories' => Category::collection($this->whenLoaded('categories')),
            'cat' => $name
        ];
    }
}
