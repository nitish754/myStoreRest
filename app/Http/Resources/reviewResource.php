<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class reviewResource extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "customber" => $this->customber_name,
            "review" => $this->review,
            "star" => $this->star,
        ];
    }
}
