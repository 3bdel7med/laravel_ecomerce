@extends('layouts.frontend')
@section('titile')
  <title>
    ecomerce
  </title>
@endsection
@section('content')

<div class="container my-4">
      <div class="row">
        <div class="col-md-3">
          <div class="card mb-4">
            <div class="card-header">
              Categories
            </div>
            <ul class="list-group list-group-flush">
              @foreach($categories as $category)
              <li class="list-group-item"><a href="/category/{{$category->id}}">{{$category->name}}</a></li>
              @endforeach
              <li class="list-group-item"><a href="/showcategory">show all category</a></li>
              <li>{{$products->count()}}</li>  
               <li>{{$categories->count()}}</li>


             </ul>
          </div>
        </div>
        <div class="col-md-9">
        <div class="owl-carousel owl-theme">
        
          @foreach ($products as $product)
          <div class="item">
            <div class="card">
              <img src="{{$product->image}}" style="height: 50px" alt="" sizes="" srcset="">
              <div class="card-body">
                <h5>{{$product->selling_price}}</h5>
              </div>

            </div>
          </div>

          @endforeach

        </div>

        </div>
      </div>
    </div>
@section('script')
<script>
  $('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      nav:true,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:3
          },
          1000:{
              items:5
          }
      }
  })
  </script>
@endsection


@endsection