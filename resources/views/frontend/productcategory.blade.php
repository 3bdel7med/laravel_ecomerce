@extends('layouts.frontend')
@section('titile')
<title>{{$categories->name}}</title>
@endsection
@section('content')
@if($products->count()==0)
<h1>No Product In This Category</h1>
@else
<div class="row">
    @foreach($products as $product)
        <div class="col-md-4">
              <a href="/prouduct/{{$product->id}}"> <img style="height:250px;" src="/{{$product->image}}" alt="Product Image" class="img-fluid">
              </a> 
              
                <h2>{{$product->name}}</h2>
                <p>{{$product->description}}</p>
           
                
        </div>
    @endforeach
</div>
@endif
@endsection