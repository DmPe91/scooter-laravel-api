<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    protected $fillable = ['session_id'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'basket_products')
                    ->withPivot('quantity');
    }
}