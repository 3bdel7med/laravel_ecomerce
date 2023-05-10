@extends('layouts.frontend')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>My Order</h3>
    </div>
    <div class="card-body">
    <table class="table">
    <thead>
        <tr>
           
            <td>name</td>
            <td>price</td>
         
        </tr>
    </thead>
    <tbody>
        @foreach($order as $order)
        <tr>
            <td>{{$order->city}}</td>

            <td>{{$order->country}}</td>
            <td><a href="" class="btn btn-primary">cancel</a>
            </td>


        </tr>


        @endforeach
    </tbody>
    </table>
    </div>
</div>

@endsection