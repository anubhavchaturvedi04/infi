@extends('layouts.front') 
@section('content')
<div class="body-content outer-top-xs" id="top-banner-and-menu">
    <div class="container">
        <div class="row">
            <!-- ============================================== SIDEBAR ============================================== -->
            <div class="col-xs-12 col-sm-12 col-md-3 sidebar">

                <!-- ================================== TOP NAVIGATION ================================== -->
                <div class="side-menu animate-dropdown outer-bottom-xs">
                    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i>Products By Utility</div>
                    <nav class="yamm megamenu-horizontal" role="navigation">
                        <ul class="nav">
                          @foreach($utilities as $utility)
                            @if(count($utility->child)>0)
                            <li class="dropdown menu-item">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{$utility->title}}</a>
                                <ul class="dropdown-menu mega-menu">
                                    <li class="yamm-content">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                  @foreach($utility->child as $cat)
                                                    <li><a href="{{route('utilityShop',['slug'=>$cat->slug])}}">{{$cat->title}}</a></li>
                                                  @endforeach
                                                </ul>
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                        <!-- /.row -->
                                    </li>
                                    <!-- /.yamm-content -->
                                </ul>
                                <!-- /.dropdown-menu -->
                            </li>
                            <!-- /.menu-item -->
                            @else
                            <li class="menu-item">
                                <a href="{{route('utilityShop',['slug'=>$utility->slug])}}">{{$utility->title}}</a>
                                <!-- /.dropdown-menu -->
                            </li>
                            @endif
                          @endforeach
                            <!-- /.menu-item -->

                        </ul>
                        <!-- /.nav -->
                    </nav>
                    <!-- /.megamenu-horizontal -->
                </div>
                <!-- /.side-menu -->
                <!-- ================================== TOP NAVIGATION : END ================================== -->

                <!-- ============================================== HOT DEALS ============================================== -->
                <div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs">
                    <h3 class="section-title">hot deals</h3>
                    <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">

                        <div class="item">
                            <div class="products">
                                <div class="hot-deal-wrapper">
                                    <div class="image">
                                        <img src="assets/images/hot-deals/p25.jpg" alt="">
                                    </div>
                                    <div class="sale-offer-tag"><span>49%<br>off</span></div>
                                    <div class="timing-wrapper">
                                        <div class="box-wrapper">
                                            <div class="date box">
                                                <span class="key">120</span>
                                                <span class="value">DAYS</span>
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
                                    <h3 class="name"><a href="{{route('utilityShop',['slug'=>$cat->slug])}}">Floral Print Buttoned</a></h3>
                                    <div class="rating rateit-small"></div>

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
                                    <h3 class="name"><a href="{{route('utilityShop',['slug'=>$cat->slug])}}">Floral Print Buttoned</a></h3>
                                    <div class="rating rateit-small"></div>

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
                        <div class="item">
                            <div class="products">
                                <div class="hot-deal-wrapper">
                                    <div class="image">
                                        <img src="assets/images/hot-deals/p10.jpg" alt="">
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
                                    <h3 class="name"><a href="{{route('utilityShop',['slug'=>$cat->slug])}}">Floral Print Buttoned</a></h3>
                                    <div class="rating rateit-small"></div>

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
                    <!-- /.sidebar-widget -->
                </div>
                <!-- ============================================== HOT DEALS: END ============================================== -->


                <!-- ============================================== SPECIAL OFFER ============================================== -->

                <div class="sidebar-widget outer-bottom-small wow fadeInUp">
                    <h3 class="section-title">Special Offer</h3>
                    <div class="sidebar-widget-body outer-top-xs">
                        <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
                            <div class="item">
                                <div class="products special-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="#">
            <img src="assets/images/products/p30.jpg" alt="">
          </a>
                                                        </div>
                                                        <!-- /.image -->



                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price">
          $450.99       </span>

                                                        </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="#">
            <img src="assets/images/products/p29.jpg" alt="">
          </a>
                                                        </div>
                                                        <!-- /.image -->


                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price">
          $450.99       </span>

                                                        </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="#">
            <img src="assets/images/products/p28.jpg" alt="">
  
          </a>
                                                        </div>
                                                        <!-- /.image -->



                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price">
          $450.99       </span>

                                                        </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="products special-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="#">
            <img src="assets/images/products/p27.jpg" alt="">
          </a>
                                                        </div>
                                                        <!-- /.image -->


                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price">
          $450.99       </span>

                                                        </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="#">
            <img src="assets/images/products/p26.jpg" alt="">
          </a>
                                                        </div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price">
          $450.99       </span>

                                                        </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="#">
            <img src="assets/images/products/p25.jpg" alt="">
          </a>
                                                        </div>
                                                        <!-- /.image -->


                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price">
          $450.99       </span>

                                                        </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="products special-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="#">
            <img src="assets/images/products/p24.jpg"  alt="">
          </a>
                                                        </div>
                                                        <!-- /.image -->


                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price">
          $450.99       </span>

                                                        </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="#">
            <img src="assets/images/products/p23.jpg" alt="">
            </a>
                                                        </div>
                                                        <!-- /.image -->



                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price">
          $450.99       </span>

                                                        </div>
                                                        <!-- /.product-price -->
                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="#">
            <img src="assets/images/products/p22.jpg" alt="">
          </a>
                                                        </div>
                                                        <!-- /.image -->


                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price">
          $450.99       </span>

                                                        </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.sidebar-widget-body -->
                </div>
                <!-- /.sidebar-widget -->
                <!-- ============================================== SPECIAL OFFER : END ============================================== -->
                <!-- ============================================== PRODUCT TAGS ============================================== -->
                <div class="sidebar-widget product-tag wow fadeInUp">
                    <h3 class="section-title">Product tags</h3>
                    <div class="sidebar-widget-body outer-top-xs">
                        <div class="tag-list">
                            <a class="item" title="Phone" href="category.html">Phone</a>
                            <a class="item active" title="Vest" href="category.html">Vest</a>
                            <a class="item" title="Smartphone" href="category.html">Smartphone</a>
                            <a class="item" title="Furniture" href="category.html">Furniture</a>
                            <a class="item" title="T-shirt" href="category.html">T-shirt</a>
                            <a class="item" title="Sweatpants" href="category.html">Sweatpants</a>
                            <a class="item" title="Sneaker" href="category.html">Sneaker</a>
                            <a class="item" title="Toys" href="category.html">Toys</a>
                            <a class="item" title="Rose" href="category.html">Rose</a>
                        </div>
                        <!-- /.tag-list -->
                    </div>
                    <!-- /.sidebar-widget-body -->
                </div>
                <!-- /.sidebar-widget -->
                <!-- ============================================== PRODUCT TAGS : END ============================================== -->
                <!-- ============================================== SPECIAL DEALS ============================================== -->

                <div class="sidebar-widget outer-bottom-small wow fadeInUp">
                    <h3 class="section-title">Special Deals</h3>
                    <div class="sidebar-widget-body outer-top-xs">
                        <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
                            <div class="item">
                                <div class="products special-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="#">
            <img src="assets/images/products/p28.jpg"  alt="">
          </a>
                                                        </div>
                                                        <!-- /.image -->


                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price">
          $450.99       </span>

                                                        </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="#">
            <img src="assets/images/products/p15.jpg"  alt="">
            </a>
                                                        </div>
                                                        <!-- /.image -->


                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price">
          $450.99       </span>

                                                        </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="#">
            <img data-echo="assets/images/products/p26.jpg"  alt="">
          </a>
                                                        </div>
                                                        <!-- /.image -->


                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price">
          $450.99       </span>

                                                        </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="products special-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="#">
            <img src="assets/images/products/p18.jpg" alt="">
          </a>
                                                        </div>
                                                        <!-- /.image -->


                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price">
          $450.99       </span>

                                                        </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="#">
            <img src="assets/images/products/p17.jpg" alt="">
          </a>
                                                        </div>
                                                        <!-- /.image -->



                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price">
          $450.99       </span>

                                                        </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="#">
            <img src="assets/images/products/p16.jpg" alt="">
                  </a>
                                                        </div>
                                                        <!-- /.image -->


                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price">
          $450.99       </span>

                                                        </div>
                                                        <!-- /.product-price -->
                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="products special-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="#">
            <img data-echo="assets/images/products/p15.jpg" alt="">
            <div class="zoom-overlay"></div>
          </a>
                                                        </div>
                                                        <!-- /.image -->



                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price">
          $450.99       </span>

                                                        </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="#">
            <img src="assets/images/products/p14.jpg"  alt="">
            <div class="zoom-overlay"></div>
          </a>
                                                        </div>
                                                        <!-- /.image -->



                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price">
          $450.99       </span>

                                                        </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="#">
            <img src="assets/images/products/p13.jpg" alt="">
          </a>
                                                        </div>
                                                        <!-- /.image -->


                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
                                                            <span class="price">
          $450.99       </span>

                                                        </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.sidebar-widget-body -->
                </div>
                <!-- /.sidebar-widget -->
                <!-- ============================================== SPECIAL DEALS : END ============================================== -->
                <!-- ============================================== NEWSLETTER ============================================== -->
                <!-- <div class="sidebar-widget newsletter wow fadeInUp outer-bottom-small">
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
                </div> -->
                <!-- /.sidebar-widget -->
                <!-- ============================================== NEWSLETTER: END ============================================== -->

                <!-- ============================================== Testimonials============================================== -->
                <!-- <div class="sidebar-widget  wow fadeInUp outer-top-vs ">
                    <div id="advertisement" class="advertisement">
                        <div class="item">
                            <div class="avatar"><img src="assets/images/testimonials/member1.png" alt="Image"></div>
                            <div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
                            <div class="clients_author">John Doe <span>Abc Company</span> </div>
                            
                        </div>
                        

                        <div class="item">
                            <div class="avatar"><img src="assets/images/testimonials/member3.png" alt="Image"></div>
                            <div class="testimonials"><em>"</em>Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
                            <div class="clients_author">Stephen Doe <span>Xperia Designs</span> </div>
                        </div>
                      

                        <div class="item">
                            <div class="avatar"><img src="assets/images/testimonials/member2.png" alt="Image"></div>
                            <div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
                            <div class="clients_author">Saraha Smith <span>Datsun &amp; Co</span> </div>
                           
                        </div>
                        

                    </div>
                    
                </div> -->

                <!-- ============================================== Testimonials: END ============================================== -->

               <!--  <div class="home-banner">
                    <img src="assets/images/banners/LHS-banner.jpg" alt="Image">
                </div> -->




            </div>
            <!-- /.sidemenu-holder -->
            <!-- ============================================== SIDEBAR : END ============================================== -->

            <!-- ============================================== CONTENT ============================================== -->
            <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
                <!-- ========================================== SECTION – HERO ========================================= -->

                <div id="hero">
                    <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">

                        <div class="item" style="background-image: url({{asset('public/slider')}}/slider_1.jpg);">
                             <div class="container-fluid">
                                <div class="caption bg-color vertical-center text-left">
                                    <div class="slider-header fadeInDown-1" style="color:black;">India's Biggest </div>
                                    <div class="big-text fadeInDown-1" style="color:black;">
                                        Packaging Destination
                                    </div>

                                    <!-- <div class="excerpt fadeInDown-2 hidden-xs">

                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>

                                    </div>
                                    <div class="button-holder fadeInDown-3">
                                        <a href="index6c11.html?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a>
                                    </div> -->
                                </div>
                            </div>
                            <!-- /.container-fluid -->
                        </div>
                        <!-- /.item -->

                        <div class="item" style="background-image: url({{asset('public/slider')}}/slider_1.jpg);">
                            <div class="container-fluid">
                                <div class="caption bg-color vertical-center text-left">
                                    <div class="slider-header fadeInDown-1" style="color:black;">India's Biggest </div>
                                    <div class="big-text fadeInDown-1" style="color:black;">
                                        Packaging Destination
                                    </div>

                                    <!-- <div class="excerpt fadeInDown-2 hidden-xs">

                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>

                                    </div>
                                    <div class="button-holder fadeInDown-3">
                                        <a href="index6c11.html?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a>
                                    </div> -->
                                </div>
                            </div>
                            <!-- /.container-fluid -->
                        </div>
                        <!-- /.item -->



                    </div>
                    <!-- /.owl-carousel -->
                </div>

                <!-- ========================================= SECTION – HERO : END ========================================= -->

                <!-- ============================================== INFO BOXES ============================================== -->
                <div class="info-boxes wow fadeInUp">
                    <div class="info-boxes-inner">
                        <div class="row">
                            <div class="col-md-6 col-sm-4 col-lg-4">
                                <div class="info-box">
                                    <div class="row">

                                        <div class="col-xs-12">
                                            <h4 class="info-box-heading green">Best Price</h4>
                                        </div>
                                    </div>
                                    <h6 class="text">Buy Packaging Material Online</h6>
                                </div>
                            </div>
                            <!-- .col -->

                            <div class="hidden-md col-sm-4 col-lg-4">
                                <div class="info-box">
                                    <div class="row">

                                        <div class="col-xs-12">
                                            <h4 class="info-box-heading green">More Products</h4>
                                        </div>
                                    </div>
                                    <h6 class="text">Coming Soon</h6>
                                </div>
                            </div>
                            <!-- .col -->

                            <div class="col-md-6 col-sm-4 col-lg-4">
                                <div class="info-box">
                                    <div class="row">

                                        <div class="col-xs-12">
                                            <h4 class="info-box-heading green">Branding</h4>
                                        </div>
                                    </div>
                                    <h6 class="text">Customize On Bulk Purchase</h6>
                                </div>
                            </div>
                            <!-- .col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.info-boxes-inner -->

                </div>
                <!-- /.info-boxes -->
                <!-- ============================================== INFO BOXES : END ============================================== -->
                <!-- ============================================== SCROLL TABS ============================================== -->
                <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
                    <div class="more-info-tab clearfix ">
                        <h3 class="new-product-title pull-left">Glass Jars</h3>
                        <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
                            <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">All</a></li>
                            <!-- <li><a data-transition-type="backSlide" href="#smartphone" data-toggle="tab">Clothing</a></li>
                            <li><a data-transition-type="backSlide" href="#laptop" data-toggle="tab">Electronics</a></li>
                            <li><a data-transition-type="backSlide" href="#apple" data-toggle="tab">Shoes</a></li> -->
                        </ul>
                        <!-- /.nav-tabs -->
                    </div>

                    <div class="tab-content outer-top-xs">
                        <div class="tab-pane in active" id="all">
                            <div class="product-slider">
                                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">

                                  @foreach($glassJars as $bottle)
                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        @php
                                                            $image=explode(',',$bottle->image)
                                                        @endphp
                                                        <a href="{{route('getProduct',['slug'=>$bottle->category->slug,'product'=>$bottle->slug])}}"><img  src="{{asset('/public/product')}}/{{$image[0]}}" alt="{{$bottle->title}}"></a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag new"><span>new</span></div>
                                                </div>
                                                <!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="{{route('utilityShop',['slug'=>$cat->slug])}}">{{$bottle->title}}</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
                                                        <span class="price">
          <i class="fa fa-inr"></i> {{$bottle->price}}      </span>
                                                        <!-- <span class="price-before-discount">$ 800</span> -->

                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <!-- <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                <i class="fa fa-shopping-cart"></i>                         
              </button>
                                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart" href="{{route('utilityShop',['slug'=>$cat->slug])}}" title="Wishlist">
                 <i class="icon fa fa-heart"></i>
              </a>
                                                            </li>

                                                            <li class="lnk">
                                                                <a class="add-to-cart" href="{{route('utilityShop',['slug'=>$cat->slug])}}" title="Compare">
                  <i class="fa fa-signal" aria-hidden="true"></i>
              </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    
                                                </div> -->
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    @endforeach
                                    <!-- /.item -->
                                </div>
                                <!-- /.home-owl-carousel -->
                            </div>
                            <!-- /.product-slider -->
                        </div>
                        <!-- /.tab-pane -->

                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.scroll-tabs -->
                <!-- ============================================== SCROLL TABS : END ============================================== -->
                <!-- ============================================== WIDE PRODUCTS ============================================== -->
                <div class="wide-banners wow fadeInUp outer-bottom-xs">
                    <div class="row">
                        <div class="col-md-7 col-sm-7">
                            <div class="wide-banner cnt-strip">
                                <div class="image">
                                    <img class="img-responsive" src="assets/images/banners/home-banner1.jpg" alt="">
                                </div>

                            </div>
                            <!-- /.wide-banner -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-5 col-sm-5">
                            <div class="wide-banner cnt-strip">
                                <div class="image">
                                    <img class="img-responsive" src="assets/images/banners/home-banner2.jpg" alt="">
                                </div>

                            </div>
                            <!-- /.wide-banner -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.wide-banners -->

                <!-- ============================================== WIDE PRODUCTS : END ============================================== -->
                <!-- ============================================== FEATURED PRODUCTS ============================================== -->
                <section class="section featured-product wow fadeInUp">
                    <h3 class="section-title">Pet & PP</h3>
                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
                        @foreach($petBottles as $bottle)
                        <div class="item item-carousel">
                            <div class="products">

                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            @php
                                                            $image=explode(',',$bottle->image)
                                                        @endphp
                                            <a href="{{route('getProduct',['slug'=>$bottle->category->slug,'product'=>$bottle->slug])}}"><img  src="{{asset('public/product')}}/{{$image[0]}}" alt="{{$bottle->title}}"></a>
                                        </div>
                                        <!-- /.image -->

                                        <div class="tag hot"><span>hot</span></div>
                                    </div>
                                    <!-- /.product-image -->


                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{{route('utilityShop',['slug'=>$cat->slug])}}">{{$bottle->title}}</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>

                                        <div class="product-price">
                                            <span class="price">
          <i class="fa fa-inr"></i>{{$bottle->price}}       </span>
                                            <!-- <span class="price-before-discount">$ 800</span> -->

                                        </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <!-- <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                <i class="fa fa-shopping-cart"></i>                         
              </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                                                </li>

                                                <li class="lnk wishlist">
                                                    <a class="add-to-cart" href="{{route('utilityShop',['slug'=>$cat->slug])}}" title="Wishlist">
                 <i class="icon fa fa-heart"></i>
              </a>
                                                </li>

                                                <li class="lnk">
                                                    <a class="add-to-cart" href="{{route('utilityShop',['slug'=>$cat->slug])}}" title="Compare">
                  <i class="fa fa-signal" aria-hidden="true"></i>
              </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div> -->
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        @endforeach
                        <!-- /.item -->
                    </div>
                    <!-- /.home-owl-carousel -->
                </section>
                <!-- /.section -->
                <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->
                <!-- ============================================== WIDE PRODUCTS ============================================== -->
                <div class="wide-banners wow fadeInUp outer-bottom-xs">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="wide-banner cnt-strip">
                                <div class="image">
                                    <img class="img-responsive" src="assets/images/banners/home-banner.jpg" alt="">
                                </div>
                                <div class="strip strip-text">
                                    <div class="strip-inner">
                                        <h2 class="text-right">New Mens Fashion<br>
                                            <span class="shopping-needs">Save up to 40% off</span></h2>
                                    </div>
                                </div>
                                <div class="new-label">
                                    <div class="text">NEW</div>
                                </div>
                                <!-- /.new-label -->
                            </div>
                            <!-- /.wide-banner -->
                        </div>
                        <!-- /.col -->

                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.wide-banners -->
                <!-- ============================================== WIDE PRODUCTS : END ============================================== -->
                <!-- ============================================== BEST SELLER ============================================== -->


                <!-- ============================================== FEATURED PRODUCTS ============================================== -->
                <section class="section wow fadeInUp new-arriavls">
                    <h3 class="section-title">Caps & Closures</h3>
                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">

                        @foreach($closures as $bottle)
                        <div class="item item-carousel">
                            <div class="products">

                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            @php
                                                            $image=explode(',',$bottle->image)
                                                        @endphp
                                            <a href="{{route('getProduct',['slug'=>$bottle->category->slug,'product'=>$bottle->slug])}}"><img  src="{{asset('public/product')}}/{{$image[0]}}" alt="{{$bottle->title}}"></a>
                                        </div>
                                        <!-- /.image -->

                                        <div class="tag hot"><span>hot</span></div>
                                    </div>
                                    <!-- /.product-image -->


                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{{route('utilityShop',['slug'=>$cat->slug])}}">{{$bottle->title}}</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>

                                        <div class="product-price">
                                            <span class="price">
          <i class="fa fa-inr"></i>{{$bottle->price}}       </span>
                                            <!-- <span class="price-before-discount">$ 800</span> -->

                                        </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <!-- <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                <i class="fa fa-shopping-cart"></i>                         
              </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                                                </li>

                                                <li class="lnk wishlist">
                                                    <a class="add-to-cart" href="{{route('utilityShop',['slug'=>$cat->slug])}}" title="Wishlist">
                 <i class="icon fa fa-heart"></i>
              </a>
                                                </li>

                                                <li class="lnk">
                                                    <a class="add-to-cart" href="{{route('utilityShop',['slug'=>$cat->slug])}}" title="Compare">
                  <i class="fa fa-signal" aria-hidden="true"></i>
              </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div> -->
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        @endforeach
                    </div>
                    <!-- /.home-owl-carousel -->
                </section>
                <!-- /.section -->
                <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->
                <section class="section wow fadeInUp new-arriavls">
                    <h3 class="section-title">Box & Paper Packaging</h3>
                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">

                        @foreach($paperBottles as $bottle)
                        <div class="item item-carousel">
                            <div class="products">

                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            @php
                                                            $image=explode(',',$bottle->image)
                                                        @endphp
                                            <a href="{{route('getProduct',['slug'=>$bottle->category->slug,'product'=>$bottle->slug])}}"><img  src="{{asset('public/product')}}/{{$image[0]}}" alt="{{$bottle->title}}"></a>
                                        </div>
                                        <!-- /.image -->

                                        <div class="tag hot"><span>hot</span></div>
                                    </div>
                                    <!-- /.product-image -->


                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{{route('utilityShop',['slug'=>$cat->slug])}}">{{$bottle->title}}</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>

                                        <div class="product-price">
                                            <span class="price">
          <i class="fa fa-inr"></i>{{$bottle->price}}       </span>
                                            <!-- <span class="price-before-discount">$ 800</span> -->

                                        </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <!-- <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                <i class="fa fa-shopping-cart"></i>                         
              </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                                                </li>

                                                <li class="lnk wishlist">
                                                    <a class="add-to-cart" href="{{route('utilityShop',['slug'=>$cat->slug])}}" title="Wishlist">
                 <i class="icon fa fa-heart"></i>
              </a>
                                                </li>

                                                <li class="lnk">
                                                    <a class="add-to-cart" href="{{route('utilityShop',['slug'=>$cat->slug])}}" title="Compare">
                  <i class="fa fa-signal" aria-hidden="true"></i>
              </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div> -->
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        @endforeach
                    </div>
                    <!-- /.home-owl-carousel -->
                </section>
                

            </div>
            <!-- /.homebanner-holder -->
            <!-- ============================================== CONTENT : END ============================================== -->
        </div>
        <!-- /.row -->
        <!-- ============================================== BRANDS CAROUSEL ============================================== -->
        <div id="brands-carousel" class="logo-slider wow fadeInUp">

            <div class="logo-slider-inner">
                <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                    <div class="item m-t-15">
                        <a href="#" class="image">
            <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
          </a>
                    </div>
                    <!--/.item-->

                    <div class="item m-t-10">
                        <a href="#" class="image">
            <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
          </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
            <img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif" alt="">
          </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
            <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
          </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
            <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
          </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
            <img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif" alt="">
          </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
            <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
          </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
            <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
          </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
            <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
          </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
            <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
          </a>
                    </div>
                    <!--/.item-->
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
<!-- /#top-banner-and-menu -->
@stop