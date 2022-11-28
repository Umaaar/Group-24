<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

class OrderController extends Controller
{
    public function index() {
      $all = Order::all();
      return view('pages.admin.orders', ['orders' => $all]);
    }

    public function display_user_orders() {
      $ordersTemp = DB::table('basket contents')
                        ->join('products', 'productck', '=', 'productID')
                        ->join('orders', 'orderck', '=', 'orderID')
                        ->where('basketck', '=', Auth::id())
                        ->get();
                        
      // $order = Order:: where (user_id= '$userid') #how to display the order of a certain authenticated user?
      return view('pages.user.orders', ['orders' => $ordersTemp] );
    }
    

    public function createOrder(){
      $currentDate = Carbon::now();
      Order::create([
      'date' => $currentDate,
      'status' => "ongoing",
      ]);

      return redirect('/');
      
    }
}
