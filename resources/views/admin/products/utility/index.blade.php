@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><span>Utilities</span><a class="btn btn-success float-right btn-sm" href="{{route('utilitiesAdminCreate')}}">Add New</a></div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Parent Utility</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
            @foreach($categories as $category)
                    <tr>
<td>{{$loop->index+1}}</td>
                        <td>
                          {{$category->title}}
                        </td>
                        <td>
                          {{$category->parent->title}}
                        </td>
                        <td>
@if($category->status==0) Inactive 
@else Active @endif</td>
                        <td><a href="{{route('utilitiesAdminEdit',['id'=>$category->id])}}" class="btn btn-warning">Edit</a>
                            <a href="{{route('utilitiesAdminDelete',['id'=>$category->id])}}" class="btn btn-danger">Delete</a></td>
                        
                    </tr>
            @endforeach
                </tbody>
                <tfoot>
                    {{$categories->links()}}
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection
