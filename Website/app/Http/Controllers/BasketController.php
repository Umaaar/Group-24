<?php

namespace App\Http\Controllers;
use App\Models\BasketContent;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class BasketController extends Controller
{
    
    public function index(){
        
        $basket = DB::table('basket contents')
                    ->join('products', 'productIDFK', "=", "productID")
                    ->select('basket contents.*', 'products.name')
                    ->get();

         return view('pages.basket') -> with('basket', $basket);
    }

    
}
