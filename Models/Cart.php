<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $primaryKey = 'menu_id';

    // Ensure 'id' column is not considered
    public $incrementing = false;

    protected $fillable = ['menu_id', 'menu_name', 'vendor_id', 'vendor_name', 'price', 'quantity'];
}
