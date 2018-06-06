@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-info">
                <div class="card-header"><span>Products</span><a class="btn btn-success float-right btn-sm" href="{{route('createProduct')}}">Add New</a></div>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach($products as $product)
        <div class="product">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="{{url('/')}}/public/product/{{$product->image}}" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">{{$product->title}}</h5>
                  </div>
                  <div class="card-footer text-muted">
                    <a href="{{route('editProduct',['id'=>$product->id])}}" class="btn btn-warning">Edit</a>
                    <a href="{{route('deleteProduct',['id'=>$product->id])}}" class="btn btn-danger">Delete</a>
                    <!-- <a href="{{route('showProduct',['id'=>$product->id])}}" class="btn btn-info">Show</a> -->
                  </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
