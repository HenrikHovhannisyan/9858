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
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($order) {
            if (empty($order->tracking_number)) {
                $order->tracking_number = self::generateTrackingNumber();
            }
        });
    }

    public static function generateTrackingNumber()
    {
        return strtoupper(bin2hex(random_bytes(5)));
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
