<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movement extends Model
{
    /** @use HasFactory<\Database\Factories\MovementFactory> */
    use HasFactory;

    protected $fillable = ['flux', 'company_id', 'delivery_price', 'observations', 'user_id'];

    public function company(){
        return $this->belongsTo(Company::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function movements(){
        return $this->hasMany(MovementProduct::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'movement_product')
                    ->withPivot('quantity')
                    ->withTimestamps();
    }

    public function getProductsFormatedNames(){
        $products = $this->products;
        $concat = $products->map(function ($product){
            return $product->name . " x" . $product->pivot->quantity; 
        })->implode('\n');

        return $concat;
    }

    public function getFormatedDate(){
        return $this->updated_at->format('d/m/Y');
    }

    public function getFormatedFlux(){
        return $this->flux == 'In' ? 'Entrada' : 'Saída';
    }

    public function getFormatedDeliveryValue(){
        return 'R$ ' . number_format($this->delivery_value, 2, ',', '.');
    }

    public function getTotalValue($formated = false){
        $products = $this->products;
        $total = 0;
        foreach ($products as $product){
            $total += $product->price * $product->pivot->quantity;
        }

        $total += $this->delivery_value;

        if($formated){
            $total = 'R$ ' . number_format($total, 2, ',', '.');
        }

        return $total;
    }
}

class MovementProduct extends Model
{
    /** @use HasFactory<\Database\Factories\MovementFactory> */
    use HasFactory;

    protected $table = 'movement_product';

    protected $fillable = ['product_id', 'movement_id', 'quantity'];

    public function movement(){
        return $this->belongsTo(Movement::class);
    }
}