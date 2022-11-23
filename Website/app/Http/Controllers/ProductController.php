<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{


	########################## ADMIN START ##########################

	public function display_products() {
      $all = Product::all();
      return view('pages.admin.products', ['products' => $all]);
	}

	public function products_men() { return view('pages.products-men'); }
	public function products_women() { return view('pages.products-women'); }

	public function add(Request $request) {
		$products = new Product();
		$products->name = $request->input('productID');
		$products->name = $request->input('name');
		$products->name = $request->input('size');
		$products->name = $request->input('price');
		$products->name = $request->input('stock');
		$products->name = $request->input('description');
		$products->name = $request->input('gender');
		$products->name = $request->input('images');

		$products->save();
		return redirect('products')->with('status', "Added new product");
	}
	########################## ADMIN END ##########################
















	########################## USER START ##########################

	









	########################## USER END ##########################

// 	public function products_men() {
// 		$products = Products::all();
// 		return view('pages.products-men');
// }
// 	public function products_women() {
// 		$products = Products::all();
// 		return view('pages.products-women');
// }

}
