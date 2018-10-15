<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Branches extends JsonResource
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
                'name' => $this->name,
                'region_id' => $this->region_id,
                'region_name' => $this->region->name_uz,
                'address' => $this->address,
            ];
        }
        return [
            'id' => (string)$this->id,
            'name' => $this->name,
            'region_id' => $this->region_id,
            'region_name' => $this->region->name_ru,
            'address' => $this->address,
        ];
    }
}
