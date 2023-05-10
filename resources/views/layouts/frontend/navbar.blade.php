<header class="  py-3">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-2">
            <a href="#" class="">
              <img src="https://via.placeholder.com/50x50" alt="Logo">
              My Site
            </a>
          </div>
          <div class="col-md-5">
            <form>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search...">
                <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
              </div>
            </form>
          </div>
          <div class="col-md-5 text-end">
            @if (Auth::user())
            <a href="/cart" class=" me-3"><i style="color:blue" class="bi bi-cart-fill"></i> Cart 
              @php
                $carts=\App\Models\Cart::where('user_id',Auth::id())

              @endphp
            @if(Auth::user())

            ({{
              
              $carts->count()

              }})
              @else
              (0)
            @endif
            </a>
           
            <a href="#" class=" me-3"><i class="bi bi-heart"></i> Wishlist</a>
            <a href="#" class=" me-3">

              
              <img src="https://via.placeholder.com/30x30" alt="{{Auth::user()->name}}" class="rounded-circle">
              

                  
              @endif
            </a>
            <i id="theme-toggle" class="bi bi-{{ $theme == 'dark' ? 'sun' : 'moon' }}"></i>
            <a href="#" class=""><i class="bi bi-gear"></i></a>
          </div>
        </div>
      </div>
    </header>
    <div class="row">
	<div id="slider" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#slider" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#slider" data-bs-slide-to="1"></li>
    <li data-bs-target="#slider" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img style="height:300px;" src="/images/1.jpg" class="d-block w-100" alt="Slide 1">
      <div class="carousel-caption d-none d-md-block">
        <h5>Slide 1 Title</h5>
        <p>Slide 1 Description</p>
      </div>
    </div>
    <div class="carousel-item">
      <img style="height:300px;" src="/images/2.jpg" class="d-block w-100" alt="Slide 2">
      <div class="carousel-caption d-none d-md-block">
        <h5>Slide 2 Title</h5>
        <p>Slide 2 Description</p>
      </div>
    </div>
    <div class="carousel-item">
      <img style="height:300px;" src="/images/3.jpg" class="d-block h-30 w-100" alt="Slide 3">
      <div class="carousel-caption d-none d-md-block">
        <h5>Slide 3 Title</h5>
        <p>Slide 3 Description</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#slider" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#slider" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>
    </div>