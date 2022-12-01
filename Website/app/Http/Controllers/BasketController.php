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
    // Display the items in basket
    public function index(){
        
        $basket = DB::table('basket_contents')
                    ->join('products', 'productck', "=", "id")
                    ->where('basketck', '=', Auth::id())
                    ->get();

         return view('pages.basket') -> with('basket', $basket);
    }

    // Display the items in place order website
    public function getInfo(){
        $basketInfo = DB::table('basket_contents')
                    ->join('basket', 'basketck', "=", "basketID")
                    ->join('products', 'productck', "=", "id")
                    ->where('basketck', '=', Auth::id())
                    ->get();

         return view('pages.checkout') -> with('basketInfo', $basketInfo);
    }

    public function removeFromBasket(Request $request){
        $basketID = $request->input('basketcontentsid');
        $basket = BasketContents::where('basketcontentsid', $basketID)->first();
        $basket->delete();
        return redirect()->back();
        

    }


    
}
