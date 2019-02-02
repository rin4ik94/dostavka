<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'delivery_price' => $this->delivery_price,
            'order_price' => $this->order_price,
            'created_at' => $this->getTime(),
            'total_price' => $this->total_price,
            'products' => Product::collection($this->whenLoaded('products')),
            'manager' => new Manager($this->whenLoaded('manager')),
            'status' => $this->status,
        ];
    }
}
