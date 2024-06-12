<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Review;
use Illuminate\View\View;

class ReviewController extends Controller
{
    public function review(Request $request)
    {
        $request->validate([
            'rating' => 'required|numeric',
            'review' => 'required|string',
            'product_name' => 'required|string',
        ]);
    
        // Simpan review yang baru
        $komen = new Review();
        $komen->product_name = $request->product_name;
        $komen->rating = $request->rating;
        $komen->review = $request->review;
        $komen->save();

        return redirect()->route('home')->with('success', 'Review');
    }   
}
