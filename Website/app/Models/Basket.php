<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey = 'basketid';
    protected $table = 'basket';

    protected $fillable = [
        'basketid',
        'userfk',
    ];
}
