<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Basket;
class Product extends Model {
    protected $table = 'Товар';
    protected $primaryKey = 'id_товара';
    protected $foreignPivotKey = 'pivot_id_товара';
    public function baskets() {
        return $this->belongsToMany(Basket::class)->withPivot('quantity');
    }
}