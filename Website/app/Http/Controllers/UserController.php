<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    ########################## ADMIN START ##########################

    public function display() {
      $all = User::all();
      return view('pages.admin.customers', ['customers' => $all]);
    }




    ########################## ADMIN END ##########################














	 ########################## USER START ##########################

   // public function get_own_orders() {
   //
   // }


    ########################## USER END ##########################



 }
