<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\BasketContents;

use function Termwind\render;

class OrderController extends Controller
{
    public function index() {
      $all = Order::all();
      return view('pages.admin.orders', ['orders' => $all]);
    }

    public function display_user_orders() {
      $ordersTemp = DB::table('basket_contents') //get the basket content table
                        ->join('products', 'productck', '=', 'id')// join products table
                        ->join('orders', 'orderfk', '=', 'orderid')// join orders table
                        ->where('basketck', '=', Auth::id())//find data where basketck= user id
                        ->get(); //gets everything that matches
                        
     
      return view('pages.user.orders', ['orders' => $ordersTemp] );
    }

    public function placeOrder() {
      $order = new Order();
      $order->date = Carbon::now();
      $order->status = 'Ongoing';
      $order->save();
      $basket = BasketContents::where('basketck', '=', Auth::id())->get();

      foreach($basket as $item) {
        $item->delete();
      }

      return redirect('/');

    }
}
