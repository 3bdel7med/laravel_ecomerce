<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    public function index(Request $request){
        $stars_rated=$request->input('product_rating');
        $product_id=$request->input('product_id');
        Rating::create([
            'user_id'=>Auth::id(),
            'product_id'=>$product_id,
            'stars_rated'=>$stars_rated
        ]);


    }
}
