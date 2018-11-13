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
        if (\Cache::get('lang') == 'uz' || $request->lang == 'uz') {
            $name = $this->region->name_uz;
        } else {
            $name = $this->region->name_ru;
        }
        return [
            'id' => (string)$this->id,
            'name' => $this->name,
            'region_id' => $this->region_id,
          'region_name' => $name,
            'address' => $this->address,
        ];
    }
}
