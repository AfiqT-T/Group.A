<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;

    // Define the table name if it's not the default (plural of model name)
    protected $table = 'deliveries';

    // Allow mass assignment for the following fields
    protected $fillable = [
        'delivery_id',
        'order_id',
        'delivery_status',
        'delivery_address',
        'delivery_date',
        'delivery_time',
    ];
}
