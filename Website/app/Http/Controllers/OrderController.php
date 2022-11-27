<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Order;

class OrderController extends Controller
{
    public function diplay_orders() {
      $all = Order::all();
      return view('pages.admin.orders', ['orders' => $all]);
    }
}
