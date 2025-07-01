<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function byCategory($type)
    {
        $products = products::where('category', $type)->get();
        return view('home', compact('products'));
    }

    public function show($id)
    {
        $product = products::findOrFail($id); // tanpa relasi

        return view('product.show', compact('product'));
    }
}
