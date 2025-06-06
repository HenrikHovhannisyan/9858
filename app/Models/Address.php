<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'address_1',
        'address_2',
        'city',
        'state',
        'zip_code',
        'country',
        'phone_number',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
