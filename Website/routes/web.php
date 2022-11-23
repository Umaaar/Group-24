<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\UserController;

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

Route::get('/login',[PageController::class, 'customerLogin']);

Route::get('/loginAdmin',[PageController::class,'adminLogin']);

Route::get('/register',[PageController::class,'register']);

Route::get('/men',[ProductController::class,'products_men']);

Route::get('/women',[ProductController::class,'products_women']);

Route::get('/', function () {
  return view('pages.home');
});

// Route::get('/men', function () {
//   return view('pages.products-men');
// });
//
// Route::get('/women', function () {
//   return view('pages.products-women');
// });


Route::get('/about', function () {
  return view('pages.about');
});

Route::get('/basket', function () {
  return view('pages.basket');
});

Route::get('/checkout', function () {
  return view('pages.checkout');
});

// Login & Register (NAVBAR)//
///////////////////////////////////////////////////
Route::get('/login', function () {
  return view('pages.customerLogin');
});

Route::get('/register', function () {
  return view('pages.customerRegister');
});
///////////////////////////////////////////////////








///////////////////////////////////////////////////
/////////// Admin Page Routes (SIDENAV) ///////////
///////////////////////////////////////////////////

Route::get('/admin', function () {
  return view('pages.admin.home');
});

Route::get('/admin/orders', function () {
  return view('pages.admin.orders');
});

Route::get('/admin/products', function () {
  return view('pages.admin.products');
});

// Route::get('/admin/customers', function () {
//   return view('pages.admin.customers');
// });


Route::get('/admin/customers', [UserController::class, 'display']);
Route::get('/admin/products', [ProductController::class, 'display_products']);


Route::get('/admin/addproduct', [ProductController::class, 'add']);
Route::post('add-product', [ProductController::class, 'add']);

 Route::get('/admin/editproduct', [ProductController::class, 'edit']);



Route::get('/admin/addproduct', function () {
  return view('pages.admin.addproduct');
});

Route::get('/admin/editproduct', function () {
  return view('pages.admin.editproduct');
});

//Route::get('list', [UserController::class,'display']);

///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////



Route::post('register',[RegisterController::class, 'register']);

Route::post('login',[LoginController::class, 'login']);

Route::post('loginAdmin',[AdminLoginController::class, 'login']);

Route::any('logOut',[LoginController::class, 'logOut']);
