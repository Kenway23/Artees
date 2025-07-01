<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;

class HomeController extends Controller
{
    public function index()
    {
        $products = products::all(); // Bisa dibatasi, filter, dsb
        return view('home', compact('products'));
    }
}
  