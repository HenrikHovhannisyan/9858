<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tracking_number',
        'product_name',
        'product_price',
        'shipping_method',
        'status',
        'file',
        'total_price',
        'whole',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getPricePerKgAttribute()
    {
        return $this->shipping_method === 'express' ? 100 : 50;
    }

    public function calculateTotalPrice($weight)
    {
        return $weight * $this->price_per_kg;
    }
}
