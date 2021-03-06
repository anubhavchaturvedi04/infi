@extends('layouts.app')
@section('content')
<div class="row">
    @foreach($vendors as $vendor)
    <div class="col-md-3">
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{$vendor->profile_picture}}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{$vendor->name}}</h3>

                <p class="text-muted text-center">{{$vendor->email}}r</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Products</b> <a class="float-right">1,322</a>
                  </li>
                  <li class="list-group-item">
                    <b>Enquiries</b> <a class="float-right">543</a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>View</b></a>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
        @endforeach
</div>
@endsection
