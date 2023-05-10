<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Order_Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function create(){
        return view ('frontend.order');
    }
    public function myordeer(){
        $order=Order::where('user_id',Auth::id())->get();
        return view('frontend.myorder',compact('order'));
    }
    public function store(Request $request){
        $order=new Order;
        $order->user_id=Auth::id();
        $order->name=$request->input('name');
        $order->lname=$request->input('lname');
        $order->address=$request->input('address');
        $order->phone=$request->input('phone');
        $order->city=$request->input('city');
        $order->country=$request->input('country');
        $order->zip=$request->input('zip');
        $order->save();
        $cart=Cart::where('user_id',Auth::id())->get();
        foreach($cart as $item)
        {
            Order_Item::create([
                'order_id'=>$order->id,
                'product_id'=>$item->product_id,
                'price'=>$item->products->selling_price,
            ]);
        }
    }
}
