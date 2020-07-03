<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Review extends Model
{
    public function Products()
    {
        return $this->belongsTo(Product::class);
    }
}
