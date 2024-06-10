<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Atau gunakan paginate jika banyak data
        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show', compact('product'));
    }
    public function checkout($id)
    {
        $product = Product::find($id);
        return view('products.checkout', compact('product'));
    }
}

