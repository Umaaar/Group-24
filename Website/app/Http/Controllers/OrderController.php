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
      $ordersTemp = Order::where('userfk', Auth::id())->get();
                        
     
      return view('pages.user.orders', ['orders' => $ordersTemp] );
    }

    public function placeOrder() {
  
      $basket = BasketContents::where('basketck', '=', Auth::id())->get();
      foreach($basket as $item) {

      $order = new Order();
      $order->userfk = Auth::id();
      $order->date = Carbon::now();
      $order->status = $item['productck'];
      $order->save();
      $item->delete();
      }

      return redirect('/');

    }
}
