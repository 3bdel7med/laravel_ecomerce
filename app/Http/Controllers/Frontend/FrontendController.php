<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Rating;
use App\Models\Review;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index(){
        $categories=Category::where('status','1')->take(3)->get();
        $products=Product::where('trading','1')->take(10)->get();
        return view('frontend.index',compact('products','categories'));
    }
    public function showcategory(){
        $categories=Category::all();
        return view('frontend.showcategory',compact('categories'));
    }
    public function productcategory($id){
        $categories=Category::find($id);
        $products=Product::where('cat_id',$id)->get();
        return view('frontend.productcategory',compact('products','categories'));


        
    }
    public function productdetail($id){
        $products=Product::where('id',$id)->get();
        $rating_condition=Rating::where('product_id',$id)->count();
        if(Rating::where('product_id',$id)->count()>0){
        $rating=Rating::where('product_id',$id)->sum('stars_rated')/Rating::where('product_id',$id)->count();
        }
        else{
          $rating=0;  
        }
        $review=Review::where('product_id',$id)->get();
        $user_rating=Rating::where('product_id',$id)->where('user_id',Auth::id())->first();
        return view('frontend.productdetail',compact('products','rating','review','user_rating'));


        
    }
}
