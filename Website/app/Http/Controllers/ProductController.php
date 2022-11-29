<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\BasketContent;
use App\Models\BasketContents;
use App\Cart;

use Session;

class ProductController extends Controller
{

	public $path;

	public function __construct() {
    $this->path = public_path('/images/');
	}

	public function display_products() {
		$all = Product::all();
      return view('pages.admin.products', ['products' => $all]);
	}

	public function products_men() {
		$all = Product::where('gender', 'Male')->get();
      return view('pages.products-men', ['products' => $all]);
	}

	public function products_women() {
		$all = Product::where('gender', 'Female')->get();
			return view('pages.products-women', ['products' => $all]);
	}

	public function detail($id){

		$data = Product::find($id);
		return view('pages.products.men.preview',['product' => $data]);

	}

	public function display_addproduct_page() {
		return view('pages.admin.addproduct');
	}

	public function insert(Request $request) {
		$products = new Product();

		$request = request();
		$images = $request->file('images');
		$result = $images->move($this->path, $images->getClientOriginalName());
		$imageName = $images->getClientOriginalName();

		$products->id = $request->input('id');
		$products->name = $request->input('name');
		$products->size = $request->input('size');
		$products->price = $request->input('price');
		$products->stock = $request->input('stock');
		$products->description = $request->input('description');
		$products->gender = $request->input('gender');
		$products->images = $imageName;

		$products->save();
		return redirect('/admin/addproduct')->with('alert', "Added new product");
	}

	public function search() {

	}


}
