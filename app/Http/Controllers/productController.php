<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Image;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function admin(){
        $products = Product::all();
        $reviews = Review::all();
        return view('admin', compact('products', 'reviews'));
    }

    public function home(){
        $products = Product::all();
        $reviews = Review::all();
        return view('main', compact('products', 'reviews'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'product_description' => 'required|string|max:255',
            'image' => 'required|image|mimes:PNG,jpeg,png,jpg,gif|max:2000048',
        ]);

        $product = new Product();
        $product->product_name = $request->product_name;
        $product->price = $request->price;
        $product->product_description = $request->product_description;

        $imageName = $request->image->getClientOriginalName();  
        $request->image->move(public_path('images'), $imageName);
        $product->image = $imageName;
        $product->save();

        $products = Product::all();
       
        return redirect()->route('admin');
    }

    public function spawn() : View
    {
        $products = Product::all();
       
        return view('admin', compact('products'));
        return $products;
        //render view with products 
    }

    public function index(){
        $products = Product::all();
        return view('main', compact('products'));
    }

    public function addReview(){
        $reviews = Review::all();
        return view('main', compact('reviews'));
    }

    function delete($id){
        $removeProduct = Product::find($id);
        $removeProduct->delete();

        $products = Product::all();
       
        return redirect()->route('admin');
    }

    function deleteR($id){
        $removeReview = Review::find($id);
        $removeReview->delete();

        $products = Product::all();
       
        return redirect()->route('admin');
    }
}

