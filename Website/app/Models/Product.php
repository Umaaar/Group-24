<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
      'productID',
      'name',
      'size',
      'price',
      'stock',
      'description',
      'gender',
      'images',
    ];

}
