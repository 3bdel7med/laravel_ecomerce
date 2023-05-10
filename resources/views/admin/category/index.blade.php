@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        <h3>Categories</h3>
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
            <td>image</td>
            <td>setting</td>
        </tr>
    </thead>
    <tbody>
        @foreach($category as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->description}}</td>
            <td><img style="height:100px;" src="{{$item->image}} " alt=""></td>
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