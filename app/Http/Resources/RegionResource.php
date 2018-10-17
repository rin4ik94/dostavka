<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RegionResource extends JsonResource
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
            'name' => $name
        ];
    }
}
