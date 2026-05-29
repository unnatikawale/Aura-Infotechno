<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order_id',
        'items',
        'total_amount',
        'currency',
        'status',
        'customer_name',
        'customer_email',
        'customer_phone',
        'user_id'
    ];

    protected $casts = [
        'items' => 'json'
    ];

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}