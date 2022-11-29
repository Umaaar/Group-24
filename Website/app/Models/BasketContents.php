<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasketContents extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'basketck',
        'productck',
        'quantity',
        'totalPrice',
        'orderck'
    ];
}
