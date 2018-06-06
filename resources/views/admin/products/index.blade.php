@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-info">
                <div class="card-header"><span>Ecom Products</span><a href="{{route('createProductAdmin')}}" class="btn btn-success float-right">Add New</a></div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>MOQ</th>
                                <th>Price/Peice</th>
                                <th>Price/Peice Branding</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                    @foreach($products as $product)
                            <tr>
                                <td>{{$loop->index+1}}
                                </td>
                                <td>
                                    @php
                                        $image=explode(',',$product->image);
                                    @endphp
                                  <img class="admin-product-image" src="{{url('/')}}/public/product/{{$image[0]}}" alt="Card image cap">
                                </td>
                                <td>
                                  {{$product->title}}
                                </td>
                                <td>{{$product->moq}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->price_brand}}</td>
                                <td>
                                    <a href="{{route('showProductAdmin',['id'=>$product->id])}}" class="btn btn-info">View</a>
<a href="{{route('editProductAdmin',['id'=>$product->id])}}" class="btn btn-warning">Edit</a>
<a href="{{route('deleteProductAdmin',['id'=>$product->id])}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                    @endforeach
                        </tbody>
                        <tfoot>
                            {{$products->links()}}
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
