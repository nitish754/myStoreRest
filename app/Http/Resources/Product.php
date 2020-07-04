<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Product extends Resource
{
    
    public function toArray($request)
    {
        return [
            "name" => $this->product_name,
            "total_price" => round($this->price-($this->price * $this->discount)/100,2),
            "href" => [
                "product_link" => route('product.show',$this->id)
            ]
        ];
    }
}
