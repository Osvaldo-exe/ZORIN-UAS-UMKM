<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\View\View;

class dataPController extends Controller
{
    public function spawn() : View
    {
        $products = Product::all();
       
        return view('layouts.productCard', compact('products'));
        return $products;
    }

    public function spawnOpen() : View
    {
        $reviews = Review::all();
       
        return view('layouts.open', compact('reviews'));
        return $reviews;
    }
}
