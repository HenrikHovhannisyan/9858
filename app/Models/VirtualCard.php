<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VirtualCard extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'stripe_card_id',
        'last4',
        'exp_month',
        'exp_year',
        'cardholder_name',
        'brand',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
