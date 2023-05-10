@extends('layouts.frontend')

@section('content')
<div class="row">
    @foreach($categories as $category)
        <div class="col-md-4">
                <img style="height:250px;" src="/{{$category->image}}" alt="Product Image" class="img-fluid">
              
              
                <h2>{{$category->name}}</h2>
                <p>{{$category->description}}</p>
           
                
        </div>
    @endforeach
</div>

@endsection