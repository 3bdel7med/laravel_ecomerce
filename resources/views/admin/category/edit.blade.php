@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        <h3>Edit Category</h3>
    </div>
    <div class="card-body">
    <form method="POST" action="/categories/store" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col">
                <label for="">Name</label>
                <input type="text"name="name" class="form-control" placeholder=" name">
            </div>
            <div class="col">
                <label for="">Slug</label>
                <input type="text" name="slug" class="form-control" placeholder="Slug">
            </div>
        </div>
        <div class="row">
            <label for="">Description</label>
            <textarea name="description" id="" cols="30" rows="5"></textarea>


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
                    <input class="form-check-input" name="popular" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                 Popular
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