@extends('layouts.frontend')
@section('titile')
<title>products</title>
@endsection
@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<style>
	.rating-css div{
		text-align: center;
		color:yellow;
	}
	.rating-css input{
		display: inline-block;
	}
	.rating-css input +label{
		cursor: pointer;
	}
	.rating-css input:checked +label ~label {
		color: #1b1b1b70
	}
	.rating-css label:active{
		transform: scale(.8);
		transition: .3s ease;
	}
	#checked{
		color:yellow;
	}
</style>

	
	<div class="container">
        @foreach ($products as $product )
            
       
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="/{{$product->image}}" /></div>
				
						</div>
						
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title">{{$product->name}}</h3>
						<div class="rating">
							<div class="stars">
								{{$rating}}		
								@for ($i=1; $i<=$rating; $i++)
								<span style="color:yellow" class="bi bi-star-fill"></span>
								@endfor
								@for ( $i>$rating+1;  $i<=5; $i++)
								<span class="bi bi-star-fill"></span>
								@endfor
							
							
							
							
							
							</div>
							<span class="review-no">41 reviews</span>
						</div>
						<p class="product-description">{{$product->description}}.</p>
						<h4 class="price">current price: <span>${{$product->selling_price}}</span></h4>
						<p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
              <!-- Basic Modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                Rating This Product
              </button>
			  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reviewModal">
                Review This Product
              </button>

              <div class="modal fade" id="basicModal" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
					<form action="{{route('rating.index')}}" method="post">
						@csrf
						<input type="hidden" name="product_id" value="{{$product->id}}">
                    <div class="modal-header">
                      <h5 class="modal-title">Rating This Product</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
						<div class="rating-css">
							<div class="star-icon">
								<input type="radio" value="1" name="product_rating" checked id="rating1">
								<label for="rating" class="bi bi-star-fill"></label>
								<input type="radio" value="2" name="product_rating" checked id="rating2">
								<label for="rating" class="bi bi-star-fill"></label>
								<input type="radio" value="3" name="product_rating" checked id="rating3">
								<label for="rating" class="bi bi-star-fill"></label>
								<input type="radio" value="4" name="product_rating" checked id="rating4">
								<label for="rating" class="bi bi-star-fill"></label>
								<input type="radio" value="5" name="product_rating" checked id="rating5">
								<label for="rating" class="bi bi-star-fill"></label>
							</div> 
						</div>

					                  
					</div>
					<button class="btn">save</button>
					</form>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary">supmit ratting</button>

                    </div>
				
                  </div>
                </div>
              </div><!-- End Basic Modal-->	
			  <div class="modal fade" id="reviewModal" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
					<form action="{{route('review.index')}}" method="post">
						@csrf
						<input type="hidden" name="product_id" value="{{$product->id}}">

                    <div class="modal-header">
                      <h5 class="modal-title">Review This Product</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
						
						<div class="form-control">
							<input class="form-control" type="text" name="review" id="">
							<button style="text-align:center" class="btn btn-primary mr-5">save</button>
						</div>
					                  
					</div>
					
					</form>
                   
				
                  </div>
                </div>
              </div><!-- End Basic Modal-->	
			  			
						<div class="action">
                            <form action="/addcart" method="post">
                               @csrf 
                            <input type="hidden" name="product_id" value="{{$product->id}}">
							<div class="row">
								<div class="col m-4">
									<div class="row">
										<div class="col-12">
											<label for="">Quantity</label>
										</div>
										<span  class="col btn btn-primary" onclick="document.getElementById('qty').value++">+</span>
										<input name="qty" value=1 id="qty" min="1" class="col" type="text">
										<span onclick="decrement()"   class="col btn btn-primary">-</span>

									</div>
								</div>
								<button class="btn btn-primary col  m-4"  style="width: 25px">
								<p class="add-to-cart" data-item-id="{{ $product->id }}">	add car</p>t<i class="bi bi-cart"></i></button>
								</form>
								
								<button class="like btn btn-secondry m-4 col" type="button"><span class="bi bi-heart"></span></button>
							</div>
							<div class="row">
								
								<!-- List group with active and disabled items -->
								<ul class="list-group list-group-flush">
									@foreach ($review as $review )
									
									<li class="list-group-item">{{$review->users->name}}   {{$review->review}} 
										<div class="stars">
												
											@for ($i=1; $i<=$review->rating->stars_rated; $i++)
											<span style="color:yellow" class="bi bi-star-fill"></span>
											@endfor
											@for ( $i>$review->rating->stars_rated+1;  $i<=5; $i++)
											<span class="bi bi-star-fill"></span>
											@endfor
										<small>Reviewed in {{$review->created_at->format('d m y')}}</small>
										
										
										
										
										</div>
									</li>	
									@endforeach
								
									
								</ul><!-- End Clean list group -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        @endforeach

	</div> 
 
	<script>
		function decrement(){
			if(document.getElementById('qty').value>1)
			document.getElementById('qty').value--;
		}
	</script>
<script>
	$(document).ready(function() {
    $('.add-to-cart').click(function() {
        var itemId = $(this).data('item-id');
        $.ajax({
            url: '/addcart',
            type: 'POST',
            data: {
                item_id: itemId,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                alert('Item added to cart!');
            }
        });
    });
});
</script>
@endsection