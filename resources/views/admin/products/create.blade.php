@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        <h3>Add New Product</h3>
    </div>
    <div class="card-body">
    <form method="POST" action="/products/store" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col">
                <label for="">Name</label>
                <input type="text"name="name" class="form-control" placeholder=" name">
            </div>
            <div class="col">
                <select name="category_id" aria-label="Default select example" id="" class="form-select">
                    @foreach($category as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="">original_price</label>
                <input type="number"name="original_price" class="form-control" placeholder=" original_price">
            </div>
            <div class="col">
                <label for="">selling_price</label>
                <input type="number" name="selling_price" class="form-control" placeholder="selling_price">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="">tax</label>
                <input type="number"name="tax" class="form-control" placeholder=" tax">
            </div>
            <div class="col">
                <label for="">quantity</label>
                <input type="number" name="quantity" class="form-control" placeholder="quantity">
            </div>
        </div>
        <div class="row">
            <label for="">Description</label>
            <textarea name="description" id="" cols="30" rows="5"></textarea>


        </div>
        <div class="row">
            <label for="">small_escription</label>
            <textarea name="small_description" id="" cols="30" rows="2"></textarea>


        </div>
        <div class="row">
            <div class="form-group">
                <div class="form-check col">
                    <input class="form-check-input" name="status" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                 Status
                    </label>
                </div>
                <div class="form-check col">
                    <input class="form-check-input" name="trading" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                    trading
                    </label>
                </div>
             </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="">MetaTitle</label>
                <input type="text" name="meta_title" class="form-control" placeholder="MetaTitle ">
            </div>
            <div class="col">
                <label for="">MetaDescription</label>
                <input type="text"name="meta_descrip" class="form-control" placeholder="MetaDescription ">
            </div>
        </div>
        <div class="row">
        <div class="col">
                <label for="">Metakeywords</label>
                <input type="text" name="meta_keywords" class="form-control" placeholder="Metakeywords">
            </div>
        </div>

        <div class="row">
        <div class="col">
                <label for="">Image</label>
                <input type="file" name="image" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button class="btn btn-primary">save</button>
            </div>
        </div>
    </form>
    </div>
</div>
@endsection