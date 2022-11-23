<?php

namespace App\Http\Controllers;
use App\Models\Basket;

use Illuminate\Http\Request;

class BasketController extends Controller
{
    
    public function index(){
        $basket = Basket::all();
        return view('pages.basket', ['basket' => $basket]);
    }

    
}
