<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Manager;

class ManagerCategoriesResource extends JsonResource
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
                'managers' => Manager::collection($this->whenLoaded('managers'))
            ];
        }
        return [
            'id' => (string)$this->id,
            'name' => $this->name_ru,
            'managers' => Manager::collection($this->whenLoaded('managers'))
        ];
    }
}
