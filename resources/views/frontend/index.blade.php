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
                <h5>{{$product->selling_price}}$</h5>
              </div>

            </div>
          </div>

          @endforeach

        </div>

        </div>
        <div class="container">
          <div class="row">
            
            
            
            <div class="card col">
              <div class="row">
                @foreach ($lastThreeproducts as $lastThreeproduct )
                <div class="col-md-4">
                 
                  <div class="card-body">
                    <h5 class="card-title">{{$lastThreeproduct->name}}</h5>
                    <p class="card-text">{{$lastThreeproduct->description}}</p>
                    <p class="card-text"><small class="text-muted">    Last updated 3 mins ago</small></p>
                  </div>
                  <img src="{{$lastThreeproduct->image}}" style="height: 180px" class="card-img-bottom" alt="...">
                </div>
                @endforeach
              </div>

        
            </div>
          
          </div>
        </div>
        <div class="container">
          <h2>Meet the team</h2>
          <div class="row">
            <div class="col-md-4">
              <div class="card">
                <img class="card-img-top" src="https://via.placeholder.com/350x200" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">John Doe</h5>
                  <p class="card-text">CEO</p>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac erat auctor, aliquet purus in, pulvinar quam. </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img class="card-img-top" src="https://via.placeholder.com/350x200" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Jane Doe</h5>
                  <p class="card-text">COO</p>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac erat auctor, aliquet purus in, pulvinar quam. </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img class="card-img-top" src="https://via.placeholder.com/350x200" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Bob Smith</h5>
                  <p class="card-text">CTO</p>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac erat auctor, aliquet purus in, pulvinar quam. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <h2>Latest blog posts</h2>
          <div class="row">
            <div class="col-md-4">
              <div class="card">
                <img class="card-img-top" src="https://via.placeholder.com/350x200" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Blog post 1</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac erat auctor, aliquet purus in, pulvinar quam. </p>
                  <a href="#" class="btn btn-primary">Read more</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img class="card-img-top" src="https://via.placeholder.com/350x200" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Blog post 2</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac erat auctor, aliquet purus in, pulvinar quam. </p>
                  <a href="#" class="btn btn-primary">Read more</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img class="card-img-top" src="https://via.placeholder.com/350x200" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Blog post 3</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac erat auctor, aliquet purus in, pulvinar quam. </p>
                  <a href="#" class="btn btn-primary">Read more</a>
                </div>
              </div>
            </div>
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