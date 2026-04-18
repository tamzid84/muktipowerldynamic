<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Contact;

class HomeController extends Controller
{
    public function index()
    {
        // Get all products with category (Eager Loading)
        $products = Product::with('category')->latest()->paginate(9);

        // Get all categories
        $categories = Category::all();

        return view('home', compact('products', 'categories'));
    }

    

public function contact(Request $request)
{
    Contact::create([
        'name' => $request->name,
        'phone' => $request->phone,
        'message' => $request->message,
    ]);

    return back()->with('success', 'Message sent successfully!');
}
}
