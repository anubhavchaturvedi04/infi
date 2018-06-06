@extends('layouts.front')
@section('keywords')
{{$detail->meta_keywords}}
@stop
@section('description')
{{$detail->meta_description}}
@stop
@section('content')
<div class="body-content outer-top-xs">
    <div class="container">
        <div class="row single-product">
            <div class="col-md-3 sidebar">
                <div class="sidebar-module-container">
                    <div class="home-banner outer-top-n">
                        <img src="assets/images/banners/LHS-banner.jpg" alt="Image">
                    </div>



                    <!-- ============================================== HOT DEALS ============================================== -->
                    <div class="sidebar-widget hot-deals wow fadeInUp outer-top-vs animated" style="visibility: visible; animation-name: fadeInUp;">
                        <h3 class="section-title">hot deals</h3>
                        <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-xs" style="opacity: 1; display: block;">

                            <div class="owl-wrapper-outer">
                                <div class="owl-wrapper" style="width: 1338px; left: 0px; display: block;">
                                    <div class="owl-item" style="width: 223px;">
                                        <div class="item">
                                            <div class="products">
                                                <div class="hot-deal-wrapper">
                                                    <div class="image">
                                                        <img src="assets/images/hot-deals/p5.jpg" alt="">
                                                    </div>
                                                    <div class="sale-offer-tag"><span>35%<br>off</span></div>
                                                    <div class="timing-wrapper">
                                                        <div class="box-wrapper">
                                                            <div class="date box">
                                                                <span class="key">120</span>
                                                                <span class="value">Days</span>
                                                            </div>
                                                        </div>

                                                        <div class="box-wrapper">
                                                            <div class="hour box">
                                                                <span class="key">20</span>
                                                                <span class="value">HRS</span>
                                                            </div>
                                                        </div>

                                                        <div class="box-wrapper">
                                                            <div class="minutes box">
                                                                <span class="key">36</span>
                                                                <span class="value">MINS</span>
                                                            </div>
                                                        </div>

                                                        <div class="box-wrapper hidden-md">
                                                            <div class="seconds box">
                                                                <span class="key">60</span>
                                                                <span class="value">SEC</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.hot-deal-wrapper -->

                                                <div class="product-info text-left m-t-20">
                                                    <h3 class="name"><a href="detail.html">{{$detail->title}}</a></h3>
                                                    <!-- <div class="rating rateit-small rateit"><button id="rateit-reset-2" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-2" style="display: none;"></button>
                                                        <div id="rateit-range-2" class="rateit-range"
                                                            tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-2" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                                                            <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                                                            <div class="rateit-hover" style="height:14px"></div>
                                                        </div>
                                                    </div> -->

                                                    <div class="product-price">
                                                        <span class="price">
									<i class="fa fa-inr"></i> {{$detail->price}}
								</span>

                                                        <!-- <span class="price-before-discount">$800.00</span> -->

                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->

                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">

                                                        <div class="add-cart-button btn-group">
                                                            <button class="btn btn-primary icon" data-toggle="modal"  type="button">
                        										<i class="fa fa-shopping-cart"></i>									
                        									</button>
                                                            <button class="btn btn-primary cart-btn" type="button" data-toggle="modal" data-target="#myModal">Enquire</button>

                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 223px;">
                                        <div class="item">
                                            <div class="products">
                                                <div class="hot-deal-wrapper">
                                                    <div class="image">
                                                        <img src="{{asset('/public/product/'.$images[0])}}" alt="{{$detail->title}}">
                                                    </div>
                                                    <div class="sale-offer-tag"><span>35%<br>off</span></div>
                                                    <div class="timing-wrapper">
                                                        <div class="box-wrapper">
                                                            <div class="date box">
                                                                <span class="key">120</span>
                                                                <span class="value">Days</span>
                                                            </div>
                                                        </div>

                                                        <div class="box-wrapper">
                                                            <div class="hour box">
                                                                <span class="key">20</span>
                                                                <span class="value">HRS</span>
                                                            </div>
                                                        </div>

                                                        <div class="box-wrapper">
                                                            <div class="minutes box">
                                                                <span class="key">36</span>
                                                                <span class="value">MINS</span>
                                                            </div>
                                                        </div>

                                                        <div class="box-wrapper hidden-md">
                                                            <div class="seconds box">
                                                                <span class="key">60</span>
                                                                <span class="value">SEC</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.hot-deal-wrapper -->

                                                <div class="product-info text-left m-t-20">
                                                    <h3 class="name"><a href="detail.html">{{$detail->title}}</a></h3>
                                                    <!-- <div class="rating rateit-small rateit"><button id="rateit-reset-3" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-3" style="display: none;"></button>
                                                        <div id="rateit-range-3" class="rateit-range"
                                                            tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-3" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                                                            <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                                                            <div class="rateit-hover" style="height:14px"></div>
                                                        </div>
                                                    </div> -->

                                                    <div class="product-price">
                                                        <span class="price">
									<i class="fa fa-inr"></i>{{$detail->price}}
								</span>

                                                        <!-- <span class="price-before-discount">$800.00</span> -->

                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->

                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">

                                                        <div class="add-cart-button btn-group">
                                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
										<i class="fa fa-shopping-cart"></i>													
									</button>
                                                            <button class="btn btn-primary cart-btn" type="button">Enquire</button>

                                                        </div>

                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 223px;">
                                        <div class="item">
                                            <div class="products">
                                                <div class="hot-deal-wrapper">
                                                    <div class="image">
                                                        <img src="assets/images/products/p7.jpg" alt="">
                                                    </div>
                                                    <div class="sale-offer-tag"><span>35%<br>off</span></div>
                                                    <div class="timing-wrapper">
                                                        <div class="box-wrapper">
                                                            <div class="date box">
                                                                <span class="key">120</span>
                                                                <span class="value">Days</span>
                                                            </div>
                                                        </div>

                                                        <div class="box-wrapper">
                                                            <div class="hour box">
                                                                <span class="key">20</span>
                                                                <span class="value">HRS</span>
                                                            </div>
                                                        </div>

                                                        <div class="box-wrapper">
                                                            <div class="minutes box">
                                                                <span class="key">36</span>
                                                                <span class="value">MINS</span>
                                                            </div>
                                                        </div>

                                                        <div class="box-wrapper hidden-md">
                                                            <div class="seconds box">
                                                                <span class="key">60</span>
                                                                <span class="value">SEC</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.hot-deal-wrapper -->

                                                <div class="product-info text-left m-t-20">
                                                    <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                                    <div class="rating rateit-small rateit"><button id="rateit-reset-4" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-4" style="display: none;"></button>
                                                        <div id="rateit-range-4" class="rateit-range"
                                                            tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-4" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                                                            <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                                                            <div class="rateit-hover" style="height:14px"></div>
                                                        </div>
                                                    </div>

                                                    <div class="product-price">
                                                        <span class="price">
									$600.00
								</span>

                                                        <span class="price-before-discount">$800.00</span>

                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->

                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">

                                                        <div class="add-cart-button btn-group">
                                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
										<i class="fa fa-shopping-cart"></i>													
									</button>
                                                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                                                        </div>

                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <div class="owl-controls clickable">
                                <div class="owl-buttons">
                                    <div class="owl-prev"></div>
                                    <div class="owl-next"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /.sidebar-widget -->
                    </div>
                    <!-- ============================================== HOT DEALS: END ============================================== -->
                    <!-- ============================================== 

<!-- ============================================== NEWSLETTER ============================================== -->
                    <div class="sidebar-widget newsletter wow fadeInUp outer-bottom-small outer-top-vs" style="visibility: hidden; animation-name: none;">
                        <h3 class="section-title">Newsletters</h3>
                        <div class="sidebar-widget-body outer-top-xs">
                            <p>Sign Up for Our Newsletter!</p>
                            <form role="form">
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Subscribe to our newsletter">
                                </div>
                                <button class="btn btn-primary">Subscribe</button>
                            </form>
                        </div>
                        <!-- /.sidebar-widget-body -->
                    </div>
                    <!-- /.sidebar-widget -->
                    <!-- ============================================== NEWSLETTER: END ============================================== -->

                    <!-- ============================================== Testimonials============================================== -->
                    <div class="sidebar-widget  wow fadeInUp outer-top-vs " style="visibility: hidden; animation-name: none;">
                        <div id="advertisement" class="advertisement owl-carousel owl-theme" style="opacity: 1; display: block;">
                            <div class="owl-wrapper-outer">
                                <div class="owl-wrapper" style="width: 1338px; left: 0px; display: block;">
                                    <div class="owl-item" style="width: 223px;">
                                        <div class="item">
                                            <div class="avatar"><img src="assets/images/testimonials/member1.png" alt="{{$detail->title}}"></div>
                                            <div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
                                            <div class="clients_author">John Doe <span>Abc Company</span> </div>
                                            <!-- /.container-fluid -->
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 223px;">
                                        <div class="item">
                                            <div class="avatar"><img src="assets/images/testimonials/member3.png" alt="{{$detail->title}}"></div>
                                            <div class="testimonials"><em>"</em>Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
                                            <div class="clients_author">Stephen Doe <span>Xperia Designs</span> </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 223px;">
                                        <div class="item">
                                            <div class="avatar"><img src="assets/images/testimonials/member2.png" alt="{{$detail->title}}"></div>
                                            <div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
                                            <div class="clients_author">Saraha Smith <span>Datsun &amp; Co</span> </div>
                                            <!-- /.container-fluid -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.item -->

                            <!-- /.item -->

                            <!-- /.item -->

                            <div class="owl-controls clickable">
                                <div class="owl-pagination">
                                    <div class="owl-page active"><span class=""></span></div>
                                    <div class="owl-page"><span class=""></span></div>
                                    <div class="owl-page"><span class=""></span></div>
                                </div>
                                <div class="owl-buttons">
                                    <div class="owl-prev"></div>
                                    <div class="owl-next"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /.owl-carousel -->
                    </div>

                    <!-- ============================================== Testimonials: END ============================================== -->



                </div>
            </div>
            <!-- /.sidebar -->
            <div class="col-md-9">
                <div class="detail-block">
                    <div class="row  wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">

                        <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
                            <div class="product-item-holder size-big single-product-gallery small-gallery">

                                <div id="owl-single-product" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
                                    <div class="owl-wrapper-outer">
                                        <div class="owl-wrapper" style="width: 5742px; left: 0px; display: block;">
                                            @if(count($images)>1)
                                            @foreach($images as $image)
                                            <div class="owl-item" style="width: 319px;">
                                                <div class="single-product-gallery-item" id="slide1">
                                                    <a data-lightbox="image-1" data-title="Gallery" href="{{asset('/public/product/'.$image)}}">
                    <img class="img-responsive" alt="{{$detail->title}}" src="{{asset('/public/product/'.$image)}}">
                </a>
                                                </div>
                                            </div>
                                            @endforeach
                                            @else
                                            <div class="owl-item" style="width: 319px;">
                                                <div class="single-product-gallery-item" id="slide1">
                                                    <a data-lightbox="image-1" data-title="Gallery" href="{{asset('/public/product/'.$images[0])}}">
                    <img class="img-responsive" alt="{{$detail->title}}" src="{{asset('/public/product/'.$images[0])}}">
                </a>
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- /.single-product-gallery-item -->

                                    <!-- /.single-product-gallery-item -->

                                    <!-- /.single-product-gallery-item -->

                                    <!-- /.single-product-gallery-item -->

                                    <!-- /.single-product-gallery-item -->

                                    <!-- /.single-product-gallery-item -->

                                    <!-- /.single-product-gallery-item -->

                                    <!-- /.single-product-gallery-item -->

                                    <!-- /.single-product-gallery-item -->

                                    <div class="owl-controls clickable">
                                        <div class="owl-pagination">
                                            <div class="owl-page active"><span class=""></span></div>
                                            <div class="owl-page"><span class=""></span></div>
                                            <div class="owl-page"><span class=""></span></div>
                                            <div class="owl-page"><span class=""></span></div>
                                            <div class="owl-page"><span class=""></span></div>
                                            <div class="owl-page"><span class=""></span></div>
                                            <div class="owl-page"><span class=""></span></div>
                                            <div class="owl-page"><span class=""></span></div>
                                            <div class="owl-page"><span class=""></span></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.single-product-slider -->


                                <div class="single-product-gallery-thumbs gallery-thumbs">

                                    <div id="owl-single-product-thumbnails" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
                                        <div class="owl-wrapper-outer">
                                            <div class="owl-wrapper" style="width: 1440px; left: 0px; display: block;">
                                                @if(count($images)>1)
                                                @foreach($images as $image)
                                                <div class="owl-item" style="width: 80px;">
                                                    <div class="item">
                                                        <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide1">
                        <img class="img-responsive" width="85" alt="{{$detail->title}}" src="{{asset('/public/product/'.$image)}}">
                    </a>
                                                    </div>
                                                </div>
                                                @endforeach
                                                @else
                                                <div class="owl-item" style="width: 80px;">
                                                    <div class="item">
                                                        <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide1">
                        <img class="img-responsive" width="85" alt="{{$detail->title}}" src="{{asset('/public/product/'.$images[0])}}">
                    </a>
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                        </div>









                                        <div class="owl-controls clickable">
                                            <div class="owl-pagination">
                                                <div class="owl-page active"><span class=""></span></div>
                                                <div class="owl-page"><span class=""></span></div>
                                                <div class="owl-page"><span class=""></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /#owl-single-product-thumbnails -->



                                </div>
                                <!-- /.gallery-thumbs -->

                            </div>
                            <!-- /.single-product-gallery -->
                        </div>
                        <!-- /.gallery-holder -->
                        <div class="col-sm-6 col-md-7 product-info-block">
                            <div class="product-info">
                                <h1 class="name">{{$detail->title}}</h1>

                                <div class="rating-reviews m-t-20">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <!-- <div class="rating rateit-small rateit"><button id="rateit-reset-5" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-5" style="display: none;"></button>
                                                <div id="rateit-range-5" class="rateit-range" tabindex="0"
                                                    role="slider" aria-label="rating" aria-owns="rateit-reset-5" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                                                    <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                                                    <div class="rateit-hover" style="height:14px"></div>
                                                </div>
                                            </div> -->
                                        </div>
                                        <div class="col-sm-8">
                                            <!-- <div class="reviews">
                                                <a href="#" class="lnk">(13 Reviews)</a>
                                            </div> -->
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.rating-reviews -->

                                <div class="stock-container info-container m-t-5">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="stock-box">
                                                <span class="label">Availability :</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="stock-box">
                                                <span class="value">In Stock</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <div class="description-container m-t-5">
                                    <strong>Pieces Per Box: </strong>{{$detail->pieces_per_box}}
                                </div>
                                <!-- /.stock-container -->

                                <div class="description-container m-t-5">
                                    {{$detail->description}}
                                </div>
                                
                                <!-- /.description-container -->

                                <div class="price-container info-container m-t-10">
                                    <div class="row">


                                        <div class="col-sm-6">
                                            <div class="price-box">
                                                <span class="price"><i class="fa fa-inr"></i>{{$detail->price}}</span>
                                                <!-- <span class="price-strike">$900.00</span> -->
                                            </div>
                                        </div>

                                        <!-- <div class="col-sm-6">
                                            <div class="favorite-button m-t-10">
                                                <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="" href="#" data-original-title="Wishlist">
											    <i class="fa fa-heart"></i>
											</a>
                                                <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="" href="#" data-original-title="Add to Compare">
											   <i class="fa fa-signal"></i>
											</a>
                                                <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="" href="#" data-original-title="E-mail">
											    <i class="fa fa-envelope"></i>
											</a>
                                            </div>
                                        </div> -->

                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.price-container -->

                                <div class="quantity-container info-container">
                                    <div class="row">

                                        <!-- <div class="col-sm-2">
                                            <span class="label">Qty :</span>
                                        </div>

                                        <div class="col-sm-2">
                                            <div class="cart-quantity">
                                                <div class="quant-input">
                                                    <div class="arrows">
                                                        <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
                                                        <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
                                                    </div>
                                                    <input type="text" value="1">
                                                </div>
                                            </div>
                                        </div>

 -->                                        <div class="col-sm-7">
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#myModal" class="btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i> Enquire</a>
                                        </div>


                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.quantity-container -->






                            </div>
                            <!-- /.product-info -->
                        </div>
                        <!-- /.col-sm-7 -->
                    </div>
                    <!-- /.row -->
                </div>
                @if(count($putils)>0)
                <div class="detail-block">
                        <div class="col-md-12">
                            <div class="panel panel-success">
                                <div class="panel-heading">You Can Use It For:</div>
                                <div class="panel-body">
                                    <div class="bs-example">
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                @foreach($putils as $putil)
                                                    <a class="btn btn-info" href="{{route('utilityShop',['slug'=>$putil->utility->slug])}}">{{$putil->utility->title}}</a>&nbsp;&nbsp;
                                                @endforeach
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                @endif
                <div class="product-tabs inner-bottom-xs  wow fadeInUp" style="visibility: hidden; animation-name: none;">
                    <div class="row">
                        <div class="col-sm-3">
                            <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                                <li class="active"><a data-toggle="tab" href="#description">DESCRIPTION</a></li>
                                <li><a data-toggle="tab" href="#review">Specification</a></li>
                                <li><a data-toggle="tab" href="#tags">Branding</a></li>
                            </ul>
                            <!-- /.nav-tabs #product-tabs -->
                        </div>
                        <div class="col-sm-9">

                            <div class="tab-content">

                                <div id="description" class="tab-pane in active">
                                    <div class="product-tab">
                                        <p class="text">{{$detail->description}}
                                    </div>
                                </div>
                                <!-- /.tab-pane -->

                                <div id="review" class="tab-pane">
                                    <div class="product-tab">
                                    	<h4 class="title">Specifications</h4>
                                    	<table class="table table-bordered">
                                            @foreach($attributes as $attribute)
                                    		<tr>
                                    			<td><strong>{{$attribute->attr_name}}</strong></td>
                                    			<td>{{$attribute->attr_value}}</td>
                                    		</tr>
                                            @endforeach
                                    	</table>
                                        
                                        

                                    </div>
                                    <!-- /.product-tab -->
                                </div>
                                <!-- /.tab-pane -->

                                <div id="tags" class="tab-pane">
                                    <div class="product-tag">
                                    	<h4 class="title">Branding</h4>
                                    	<table class="table table-bordered">
                                    		<tr>
                                    			<td><strong>MOQ</strong></td>
                                    			<td>{{$detail->moq_brand}}</td>
                                    		</tr>
                                    		<tr>
                                    			<td><strong>Dispatch Time</strong></td>
                                    			<td>{{$detail->dispatch_time_brand}}</td>
                                    		</tr>
                                    	</table>
                                        
                                    </div>
                                    <!-- /.product-tab -->
                                </div>
                                <!-- /.tab-pane -->

                            </div>
                            <!-- /.tab-content -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.product-tabs -->

                <!-- ============================================== UPSELL PRODUCTS ============================================== -->
                <section class="section featured-product wow fadeInUp" style="visibility: hidden; animation-name: none;">
                    <h3 class="section-title">upsell products</h3>
                    <div class="owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs" style="opacity: 1; display: block;">

                        <div class="owl-wrapper-outer">
                            <div class="owl-wrapper" style="width: 2484px; left: 0px; display: block;">
                                <div class="owl-item" style="width: 207px;">
                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html"><img src="assets/images/products/p1.jpg" alt=""></a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag sale"><span>sale</span></div>
                                                </div>
                                                <!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                                    <div class="rating rateit-small rateit"><button id="rateit-reset-6" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-6" style="display: none;"></button>
                                                        <div id="rateit-range-6" class="rateit-range"
                                                            tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-6" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                                                            <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                                                            <div class="rateit-hover" style="height:14px"></div>
                                                        </div>
                                                    </div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
                                                        <span class="price">
					$650.99				</span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
								<i class="fa fa-shopping-cart"></i>													
							</button>
                                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
								 <i class="icon fa fa-heart"></i>
							</a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
							    <i class="fa fa-signal"></i>
							</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 207px;">
                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html"><img src="assets/images/products/p2.jpg" alt=""></a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag sale"><span>sale</span></div>
                                                </div>
                                                <!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                                    <div class="rating rateit-small rateit"><button id="rateit-reset-7" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-7" style="display: none;"></button>
                                                        <div id="rateit-range-7" class="rateit-range"
                                                            tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-7" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                                                            <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                                                            <div class="rateit-hover" style="height:14px"></div>
                                                        </div>
                                                    </div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
                                                        <span class="price">
					$650.99				</span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
								<i class="fa fa-shopping-cart"></i>													
							</button>
                                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
								 <i class="icon fa fa-heart"></i>
							</a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
							    <i class="fa fa-signal"></i>
							</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 207px;">
                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html"><img src="assets/images/products/p3.jpg" alt=""></a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag hot"><span>hot</span></div>
                                                </div>
                                                <!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                                    <div class="rating rateit-small rateit"><button id="rateit-reset-8" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-8" style="display: none;"></button>
                                                        <div id="rateit-range-8" class="rateit-range"
                                                            tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-8" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                                                            <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                                                            <div class="rateit-hover" style="height:14px"></div>
                                                        </div>
                                                    </div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
                                                        <span class="price">
					$650.99				</span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
								<i class="fa fa-shopping-cart"></i>													
							</button>
                                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
								 <i class="icon fa fa-heart"></i>
							</a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
							    <i class="fa fa-signal"></i>
							</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 207px;">
                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html"><img src="assets/images/products/p4.jpg" alt=""></a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag new"><span>new</span></div>
                                                </div>
                                                <!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                                    <div class="rating rateit-small rateit"><button id="rateit-reset-9" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-9" style="display: none;"></button>
                                                        <div id="rateit-range-9" class="rateit-range"
                                                            tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-9" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                                                            <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                                                            <div class="rateit-hover" style="height:14px"></div>
                                                        </div>
                                                    </div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
                                                        <span class="price">
					$650.99				</span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
								<i class="fa fa-shopping-cart"></i>													
							</button>
                                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
								 <i class="icon fa fa-heart"></i>
							</a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
							    <i class="fa fa-signal"></i>
							</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 207px;">
                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html"><img src="assets/images/blank.gif" data-echo="assets/images/products/p5.jpg" alt=""></a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag hot"><span>hot</span></div>
                                                </div>
                                                <!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                                    <div class="rating rateit-small rateit"><button id="rateit-reset-10" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-10" style="display: none;"></button>
                                                        <div id="rateit-range-10" class="rateit-range"
                                                            tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-10" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                                                            <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                                                            <div class="rateit-hover" style="height:14px"></div>
                                                        </div>
                                                    </div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
                                                        <span class="price">
					$650.99				</span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
								<i class="fa fa-shopping-cart"></i>													
							</button>
                                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
								 <i class="icon fa fa-heart"></i>
							</a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
							    <i class="fa fa-signal"></i>
							</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 207px;">
                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html"><img src="assets/images/blank.gif" data-echo="assets/images/products/p6.jpg" alt=""></a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag new"><span>new</span></div>
                                                </div>
                                                <!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                                    <div class="rating rateit-small rateit"><button id="rateit-reset-11" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-11" style="display: none;"></button>
                                                        <div id="rateit-range-11" class="rateit-range"
                                                            tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-11" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                                                            <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                                                            <div class="rateit-hover" style="height:14px"></div>
                                                        </div>
                                                    </div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
                                                        <span class="price">
					$650.99				</span>
                                                        <span class="price-before-discount">$ 800</span>

                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
								<i class="fa fa-shopping-cart"></i>													
							</button>
                                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
								 <i class="icon fa fa-heart"></i>
							</a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="detail.html" title="Compare">
							    <i class="fa fa-signal"></i>
							</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.item -->

                        <!-- /.item -->

                        <!-- /.item -->

                        <!-- /.item -->

                        <!-- /.item -->

                        <!-- /.item -->
                        <div class="owl-controls clickable">
                            <div class="owl-buttons">
                                <div class="owl-prev"></div>
                                <div class="owl-next"></div>
                            </div>
                        </div>
                    </div>
                    <!-- /.home-owl-carousel -->
                </section>
                <!-- /.section -->
                <!-- ============================================== UPSELL PRODUCTS : END ============================================== -->

            </div>
            <!-- /.col -->
            <div class="clearfix"></div>
        </div>
        <!-- /.row -->
        <!-- ============================================== BRANDS CAROUSEL ============================================== -->
        <div id="brands-carousel" class="logo-slider wow fadeInUp" style="visibility: hidden; animation-name: none;">

            <div class="logo-slider-inner">
                <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme" style="opacity: 1; display: block;">
                    <div class="owl-wrapper-outer">
                        <div class="owl-wrapper" style="width: 3800px; left: 0px; display: block;">
                            <div class="owl-item" style="width: 190px;">
                                <div class="item m-t-15">
                                    <a href="#" class="image">
						<img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
					</a>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 190px;">
                                <div class="item m-t-10">
                                    <a href="#" class="image">
						<img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
					</a>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 190px;">
                                <div class="item">
                                    <a href="#" class="image">
						<img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif" alt="">
					</a>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 190px;">
                                <div class="item">
                                    <a href="#" class="image">
						<img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
					</a>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 190px;">
                                <div class="item">
                                    <a href="#" class="image">
						<img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
					</a>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 190px;">
                                <div class="item">
                                    <a href="#" class="image">
						<img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif" alt="">
					</a>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 190px;">
                                <div class="item">
                                    <a href="#" class="image">
						<img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
					</a>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 190px;">
                                <div class="item">
                                    <a href="#" class="image">
						<img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
					</a>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 190px;">
                                <div class="item">
                                    <a href="#" class="image">
						<img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
					</a>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 190px;">
                                <div class="item">
                                    <a href="#" class="image">
						<img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
					</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.item-->

                    <!--/.item-->

                    <!--/.item-->

                    <!--/.item-->

                    <!--/.item-->

                    <!--/.item-->

                    <!--/.item-->

                    <!--/.item-->

                    <!--/.item-->

                    <!--/.item-->
                    <div class="owl-controls clickable">
                        <div class="owl-buttons">
                            <div class="owl-prev"></div>
                            <div class="owl-next"></div>
                        </div>
                    </div>
                </div>
                <!-- /.owl-carousel #logo-slider -->
            </div>
            <!-- /.logo-slider-inner -->

        </div>
        <!-- /.logo-slider -->
        <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
    </div>
    <!-- /.container -->
</div>


<div class="modal fade model-lg" tabindex="-1" role="dialog" id="myModal" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Enquiry Form</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="#">
            <div class="form-group">
                <label class="col-sm-3 control-label">Name</label>
                <div class="col-sm-7">
                    <input type="text" name="name" placeholder="Name" class="form-control">
                </div>
            </div>
            <!-- <div class="form-group">
                <label class="col-sm-3 control-label">Company Name</label>
                <div class="col-sm-7">
                    <input type="text" name="company" placeholder="Company Name (Optional)" class="form-control">
                </div>
            </div> -->
            <div class="form-group">
                <label class="col-sm-3 control-label">Email</label>
                <div class="col-sm-7">
                    <input type="email" name="email" placeholder="abc@example.com" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Contact</label>
                <div class="col-sm-7">
                    <input type="text" name="contact" minlength="10" maxlength="10" placeholder="Phone Number" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Quantity Required</label>
                <div class="col-sm-7">
                    <input type="number" name="quantity" value="{{$detail->moq}}" placeholder="Eg: 1000" min="{{$detail->moq}}" step="100" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Delivery Location</label>
                <div class="col-sm-7">
                    <input type="text" name="location" placeholder="Delhi, India" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Any Message</label>
                <div class="col-sm-7">
                    <textarea name="comment" rows="10" placeholder="Any Message (Optional)" cols="25" class="form-control"></textarea>
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default closeModal" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary submitEnquiry">Submit</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<input type="hidden" name='product_id' value="{{$detail->id}}">
@if(Auth::user())
<input type="hidden" name='user_id' value="{{Auth::user()->id}}">
@endif
@stop
@section('js')
<script type="text/javascript">
    $(document).on('click','.submitEnquiry',function(){
        var obj=$(this);
        var name=$("input[name='name']").val();
        var email=$("input[name='email']").val();
        var contact=$("input[name='contact']").val();
        var quantity=$("input[name='quantity']").val();
        var location=$("input[name='location']").val();
        var comment=$("textarea[name='comment']").val();
        var user_id=$("input[name='user_id']").val();
        if(comment=='')
        {
            comment="Web Enquiry";
        }
        var product_id=$("input[name='product_id']").val();
        $.ajax({
            url:"{{route('submitEnquiry')}}",
            method:"POST",
            headers:{
                "X-CSRF-TOKEN":"{{csrf_token()}}"
            },
            data:{
                "name":name,"email":email,"contact":contact,"quantity":quantity,"location":location,"comment":comment,"product_id":product_id,"user_id":user_id
            },
            success:function(data)
            {
                if(data=="Success")
                {
                    toastr.success("Enquiry Submitted Succesfully");
                    $(".closeModal").trigger('click');
                    obj.closest('form').get(0).reset();
                }
            }
        })

    });
</script>
@stop`