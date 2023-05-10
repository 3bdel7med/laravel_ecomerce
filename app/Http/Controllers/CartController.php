<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function cartitems()
    {
        $id=Auth::id();
        $cart=Cart::where('user_id',$id)->get();
     
        return view('frontend.cart',compact('cart','total'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product_id=$request->input('product_id');
        $quantity=$request->input('quantity');

        $cart=new Cart;
        $cart->product_id=$product_id;
        $cart->user_id=Auth::id();
        $cart->qty=$request->input('qty');
        $cart->save();
        return redirect()->back()->with('status','product added');



    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
