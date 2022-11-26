<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
	
	public function display_products() {
		$all = Product::all();
      return view('pages.admin.products', ['products' => $all]);
	}

	public function products_men() { 
		$all = Product::all();
		return view('pages.products-men', ['products' => $all]); 
	}
	public function products_women() { return view('pages.products-women'); }

	public function display_addproduct_page() {
		return view('pages.admin.addproduct');
	}

	public function insert(Request $request) {
		$products = new Product();

		// if ($request->hasFile('images')) {
		// 	$file = $request->file('images');
		// 	$ext = $file->getClientOriginalExtension();
		// 	$filename = time() . '.' . $ext;
		// 	$filename->move('productImages/', $filename);
		// 	$products->image = $filename;
		// }

		$products->productID = $request->input('productID');
		$products->name = $request->input('name');
		$products->size = $request->input('size');
		$products->price = $request->input('price');
		$products->stock = $request->input('stock');
		$products->description = $request->input('description');
		$products->gender = $request->input('gender');
		$products->images = $request->input('images');

		$products->save();
		return redirect('/admin/addproduct')->with('alert', "Added new product");
	}
}
