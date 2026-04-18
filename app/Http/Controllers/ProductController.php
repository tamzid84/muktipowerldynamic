<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Main page
   public function index()
{
    $products = \App\Models\Product::paginate(2);

    return view('products.index', compact('products'));
}

    // AJAX filter + pagination
   public function filter(Request $request)
{
    $query = Product::query();

    if ($request->category_id) {
        $query->where('category_id', $request->category_id);
    }

    $products = $query->paginate(2);

    return view('products.partials.product_list', compact('products'))->render();
}
public function quickView($id)
{
    $product = \App\Models\Product::findOrFail($id);

    return view('products.partials.quick_view', compact('product'));
}

}