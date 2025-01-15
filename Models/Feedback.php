<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $table = 'feedbacks';
    protected $fillable = [
        'order_id',
        'user_name',
        'contact_number',
        'address',
        'rating',
        'comments',
    ];
}
