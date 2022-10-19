<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  public function about() {
    return view('pages.about');
  }
  public function admin() {
    return view('pages.admin');
  }
  public function checkout() {
    return view('pages.checkout');
  }
  public function home() {
    return view('pages.home');
  }
  public function products() {
    return view('pages.products');
  }
  public function account() {
    return view('pages.account');
  }
}
