<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Basket extends Model {
    public function products() {
        return $this->belongsToMany(Product::class,null,null,"product_id",)->withPivot('quantity');
    }
}
