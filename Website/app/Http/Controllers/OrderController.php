<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

use function Termwind\render;

class OrderController extends Controller
{
    public function index() {
      $all = Order::all();
      return view('pages.admin.orders', ['orders' => $all]);
    }

    public function display_user_orders() {
      $ordersTemp = DB::table('basket contents') //get the basket content table
                        ->join('products', 'productck', '=', 'productID')// join products table
                        ->join('orders', 'orderck', '=', 'orderID')// join orders table
                        ->where('basketck', '=', Auth::id())//find data where basketck= user id
                        ->get(); //gets everything that matches
                        
     
      return view('pages.user.orders', ['orders' => $ordersTemp] );
    }

    public function placeOrder() {
      $order = new Order();
      $order->orderDate = Carbon::now();
      $order->orderStatus = 'Ongoing';

      return redirect('/');

    }
}
