<?php

namespace App\Http\Controllers;
use App\Models\BasketContent;
use App\Models\BasketContents;
use App\Models\Product;
use App\BasketOps;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class BasketController extends Controller
{
    
    public function index(){
        
        $basket = DB::table('basket-contents')
                    ->join('products', 'productIDFK', "=", "id")
                    ->select('basket-contents.*', 'products.name')
                    ->get();

         return view('pages.basket') -> with('basket', $basket);
    }


    public function getInfo(){
        $basketInfo = DB::table('basket-contents')
                    ->join('baskets', 'basketck', "=", "basketID")
                    ->join('products', 'productIDFK', "=", "id")
                    ->select('basket-contents.*', 'products.name')
                    ->get();

         return view('pages.checkout') -> with('basketInfo', $basketInfo);
    }


    
}
