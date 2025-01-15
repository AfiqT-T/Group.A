<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders'; // Add this line to specify table name
    protected $fillable = [
        'user_id',
        'item_name',
        'quantity',
        'price',
        'total_amount',
        'status',
        'order_date'
    ];

    protected $casts = [
        'order_date' => 'datetime'
    ];
}
