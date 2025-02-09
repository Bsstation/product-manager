<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    protected $fillable = ['name', 'price', 'description'];

    public function movements(){
        return $this->belongsToMany(MovementProduct::class, 'movement_product')
                    ->withPivot('quantity')
                    ->withTimestamps();
    }
}
