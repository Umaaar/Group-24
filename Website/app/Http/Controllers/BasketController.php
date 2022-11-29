<?php

namespace App\Http\Controllers;
use App\Models\BasketContent;
use App\Models\BasketContents;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\BasketOps;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class BasketController extends Controller
{
    
    public function index(){
        
        $basket = DB::table('basket_contents')
                    ->join('products', 'productck', "=", "id")
                    ->where('basketck', '=', Auth::id())
                    ->get();

         return view('pages.basket') -> with('basket', $basket);
    }


    public function getInfo(){
        $basketInfo = DB::table('basket_contents')
                    ->join('basket', 'basketck', "=", "basketID")
                    ->join('products', 'productck', "=", "id")
                    ->where('basketck', '=', Auth::id())
                    ->get();

         return view('pages.checkout') -> with('basketInfo', $basketInfo);
    }


    
}
