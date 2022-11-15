<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/user/{name}/{id}', function($name, $id) {
    return '<h2>Displaying user: ' . $name . ' (#' . $id . ')';
});

Route::get('/about', [PageController::class, 'about']);

Route::get('/account', [PageController::class, 'account']);

Route::get('/admin', [PageController::class, 'admin']);

Route::get('/checkout', [PageController::class, 'checkout']);

Route::get('/', [PageController::class, 'home']);

Route::get('/products', [ProductsController::class, 'products']);

Route::get('/login',[PageController::class, 'customerLogin']);

Route::get('/loginAdmin',[PageController::class,'adminLogin']);

Route::get('/register',[PageController::class,'register']);

Route::get('/', function () {
  return view('pages.home');
});

Route::get('/products', function () {
  return view('pages.products');
});

Route::get('/about', function () {
  return view('pages.about');
});
