<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'img',
        'tizer_description',
        'description',
        'type_id',
        'condition_id',
    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function condition()
    {
        return $this->belongsTo(Condition::class);
    }
}