<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasketContents extends Model
{
    use HasFactory;

    protected $fillable = [
        'basketID',
        'productID',
        'quantity',
        'totalPrice',
        'orderID'
    ];
}
