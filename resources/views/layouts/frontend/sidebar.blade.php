<div class="container my-4">
      <div class="row">
        <div class="col-md-3">
          <div class="card mb-4">
            <div class="card-header">
              Categories
            </div>
            <ul class="list-group list-group-flush">
              @foreach(\App\Models\Category as $category)
              <li class="list-group-item"><a href="#">{{$category->name}}</a></li>
              @endforeach
              <li class="list-group-item"><a href="#">Category 2</a></li>
              <li class="list-group-item"><a href="#">Category 3</a></li>
              <li class="list-group-item"><a href="#">Category 4</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-9">
          @yield('content') 
        </div>
      </div>
    </div>