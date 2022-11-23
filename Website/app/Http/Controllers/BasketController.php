<?php

namespace App\Http\Controllers;
use App\Models\BasketContent;

use Illuminate\Http\Request;

class BasketController extends Controller
{
    
    public function index(){
       $basket = session()->get('basket');
       if ($basket == null){
           $basket = [];
       }
         return view('pages.basket') -> with('basket', $basket);
    }

    
}
