@extends('layouts.app')
@section('content')
<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						@php
              $image=explode(',',$enquiry->product->image);
            @endphp
            <img style="height: 400px;width: 260px;margin-left: 50px;" src="{{url('/')}}/public/product/{{$image[0]}}" />
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title">{{$enquiry->product->title}}</h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no">41 reviews</span>
						</div>
						<p class="product-description">{{$enquiry->product->description}}</p>
						<h4 class="price">Enquired By: <span></i>{{$enquiry->name}}</span></h4>
            <h4 class="price">Email: <span>{{$enquiry->email}}</span></h4>
            <h4 class="price">Contact: <span></i>{{$enquiry->contact}}</span></h4>
            <h4 class="price">Location: <span></i>{{$enquiry->location}}</span></h4>
            <h4 class="price">Quantity: <span></i>{{$enquiry->quantity}}</span></h4>
					</div>
				</div>
			</div>
		</div>
    <h2>Sold By:</h2>
    <div class="row">
          @foreach($vendors as $vendor)
    <div class="col-md-3">
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{$vendor->user->profile_picture}}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{$vendor->user->name}}</h3>

                <p class="text-muted text-center">{{$vendor->user->email}}</p>
                <p class="text-muted text-center">{{$vendor->user->phone}}</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Price</b> <a class="float-right">{{$vendor->price}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Price With Branding</b> <a class="float-right">{{$vendor->price_brand}}</a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>View</b></a>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
        @endforeach
        </div>
	</div>
@endsection
