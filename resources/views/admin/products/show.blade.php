@extends('layouts.app')
@section('content')
<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="row">
					<div class="col-md-6">
            @php
              $image=explode(',',$product->image);
            @endphp
						<img style="height: 400px;width: 260px;margin-left: 50px;" src="{{url('/')}}/public/product/{{$image[0]}}" />
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title">{{$product->title}}</h3>
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
						<p class="product-description">{{$product->description}}</p>
						<h4 class="price">Price Per Piece: <span><i class='fa fa-inr'></i>{{$product->price}}</span></h4>
<h4 class="price">Price Per Piece With Branding: <span><i class='fa fa-inr'></i>{{$product->price_brand}}</span></h4>
						<p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
						<h5 class="sizes">Pieces Per Box:
							<span class="size" data-toggle="tooltip" title="small">{{$product->pieces_per_box}}</span>
						</h5>
<h5 class="sizes">Color:
							<span class="size" data-toggle="tooltip" title="small">{{$product->colour}}</span>
						</h5>
						<h5 class="colors">Packing Type:
							
							<span>N.A.</span>
						</h5>
						
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