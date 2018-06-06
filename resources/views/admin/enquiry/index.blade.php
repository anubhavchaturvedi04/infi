@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-info">
                <div class="card-header"><span>Enquiries</span></div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                    @foreach($enquiries as $enquiry)
                            <tr>
                                <td>{{$loop->index+1}}
                                </td>
                                <td>
                                  {{$enquiry->name}}
                                </td>
                                <td>
                                  {{$enquiry->product->title}}
                                </td>
                                <td>{{$enquiry->quantity}}</td>
                                <td>{{$enquiry->email}}</td>
                                <td>{{$enquiry->contact}}</td>
                                <td>
                                    <a href="{{route('enquiryShowAdmin',['id'=>$enquiry->id])}}" class="btn btn-info">View</a>
                                </td>
                            </tr>
                    @endforeach
                        </tbody>
                        <tfoot>
                            {{$enquiries->links()}}
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
