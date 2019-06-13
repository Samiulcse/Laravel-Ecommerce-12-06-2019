<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class FrontController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('frontend.home',compact('products'));
    }
    
    public function shirts()
    {
        $products = Product::all();
        return view('frontend.shirts',compact('products'));
    }

    public function shirt($id)
    {
        $product = Product::findOrFail($id);
        return view('frontend.shirt',compact('product'));
    }
}
