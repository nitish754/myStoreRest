<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class productResource extends JsonResource
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
            "name" => $this->product_name,
            "description" => $this->product_details,
            "actual_price" => $this->price,
            "discount" => $this->discount,
            "total_price" => round($this->price-($this->price * $this->discount)/100,2) ,
            "stock" => $this->stock,
            "href" => [
                "review" => route('reviews.index',$this->id)
            ]
        ];
    }
}
