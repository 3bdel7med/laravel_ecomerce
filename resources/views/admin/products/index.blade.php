@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        <h3>Products</h3>
        <div class="row">
            <div class="cool"></div>
            <div class="cool"><button class="btn btn-primary"><a href="products/create">Add New</a></button></div>
            <div class="cool"></div>
        </div>
    </div>
    <div class="card-body">
    <table class="table">
    <thead>
        <tr>
            <td>
                id
            </td>
            <td>name</td>
            <td>description</td>
            <td>original_price</td>
            <td>selling_price</td>
            <td>quantity</td>
            <td>tax</td>
            <td>image</td>
            <td>setting</td>
        </tr>
    </thead>
    <tbody>
        @foreach($product as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->original_price}}</td>
            <td>{{$product->selling_price}}</td>
            <td>{{$product->qty}}</td>
            <td>{{$product->tax}}</td>

            <td><img style="height:100px;" src="{{$product->image}} " alt=""></td>
            <td><a href="" class="btn btn-primary">edit</a>
            <a href="" class="btn btn-primary">delete</a>
            </td>


        </tr>


        @endforeach
    </tbody>
    </table>
    </div>
</div>
@endsection