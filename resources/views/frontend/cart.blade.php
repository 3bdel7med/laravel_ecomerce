@extends('layouts.frontend')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Cart Items</h3>
    </div>
    <div class="card-body">
    <table class="table">
    <thead>
        <tr>
        
            <td>product</td>
          
            
            <td>price</td>
            <td>image</td>
            <td>Quantity</td>
            <td>setting</td>
        </tr>
    </thead>
    <tbody>
        @if ($cart->count()>0)
        @foreach($cart as $item)
        <tr>
            <td>{{$item->products->name}}</td>
            <td>{{$item->products->selling_price}}</td>
            <td><img style="height:100px;" src="{{$item->products->image}} " alt=""></td>
            <td>{{$item->qty}}</td>
            <td>
            <a href="" class="btn btn-primary">delete</a>
            </td>


        </tr>
            


        @endforeach  
 
        @else
        <h2>no items</h2>
        @endif
       
    </tbody>
    <tfoot>
      
        <tr>
            <td><h3>Total Price </h3></td>
            <td><h3></h3></td>
            <td><a href="/makeorder " class="btn btn-primary">make order</a></td>
        </tr>
    </tfoot>
    </table>
    </div>
</div>
@endsection