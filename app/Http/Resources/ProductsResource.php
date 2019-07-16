<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductsResource extends JsonResource
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
            'name' => $this->name,
            'price' => $this->price,
            'image' => $this->image->name,
//            'category'=>CategoryResource::collection($this->categories),


        ];

    }
}
