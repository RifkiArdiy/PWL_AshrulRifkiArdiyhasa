<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SalesController extends Controller
{
    //
    public function index()
    {
        $products = Product::all(); // Ambil semua produk
        return view('sales.pos', compact('products'));
    }
}
