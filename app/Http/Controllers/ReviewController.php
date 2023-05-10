<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function index(Request $request){
        $review=$request->input('review');
        $product_id=$request->input('product_id');
        Review::create([
            'user_id'=>Auth::id(),
            'product_id'=>$product_id,
            'review'=>$review
        ]);


    }
}
