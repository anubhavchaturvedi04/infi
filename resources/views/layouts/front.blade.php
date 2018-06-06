<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from www.themesground.com/flipmart-demo/V2/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 May 2018 13:20:57 GMT -->
<head>
		<!-- Meta -->
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-WX3L2VX');</script>
		<!-- End Google Tag Manager -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="@yield('description')">
		<meta name="author" content="">
	    <meta name="keywords" content="@yield('keywords')">
	    <meta name="robots" content="all">

	    <title>{{ config('app.name', 'Infinity Bottles') }}</title>

	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="{{asset('public/front/css/bootstrap.min.css')}}">
	    
	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="{{asset('public/front/css/main.css')}}">
	    <link rel="stylesheet" href="{{asset('public/front/css/blue.css')}}">
	    <link rel="stylesheet" href="{{asset('public/front/css/owl.carousel.css')}}">
		<link rel="stylesheet" href="{{asset('public/front/css/owl.transitions.css')}}">
		<link rel="stylesheet" href="{{asset('public/front/css/animate.min.css')}}">
		<link rel="stylesheet" href="{{asset('public/front/css/rateit.css')}}">
		<link rel="stylesheet" href="{{asset('public/front/css/bootstrap-select.min.css')}}">

		

		
		<!-- Icons/Glyphs -->
		<link rel="stylesheet" href="{{asset('public/front/css/font-awesome.css')}}">

        <!-- Fonts --> 
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>


	</head>
    <body class="cnt-home">
    	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WX3L2VX"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
		<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">

	<!-- ============================================== TOP MENU ============================================== -->
<div class="top-bar animate-dropdown">
	<div class="container">
		<div class="header-top-inner">
			<div class="cnt-account">
				<ul class="list-unstyled">
					<!-- <li><a href="#"><i class="icon fa fa-user"></i>My Account</a></li>
					<li><a href="#"><i class="icon fa fa-heart"></i>Wishlist</a></li>
					<li><a href="#"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li> -->
					@guest
					<li><a href="{{route('getLogin')}}"><i class="icon fa fa-lock"></i>Login</a></li>
					@else
					<li><a href="javascript:void();">Hello {{ Auth::user()->name }}</a></li>
					<li><a href="{{route('userEnquiries')}}"><i class="fa fa-search"></i>&nbsp;My Enquiries</a></li>
					<li>
						<a onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="icon fa fa-sign-out"></i>Logout</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			            	@csrf
			            </form>
					</li>
					@endguest
				</ul>
			</div><!-- /.cnt-account

			<!-- <div class="cnt-block">
				<ul class="list-unstyled list-inline">
					<li class="dropdown dropdown-small">
						<a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">USD </span><b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">USD</a></li>
							<li><a href="#">INR</a></li>
							<li><a href="#">GBP</a></li>
						</ul>
					</li>

					<li class="dropdown dropdown-small">
						<a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">English </span><b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">English</a></li>
							<li><a href="#">French</a></li>
							<li><a href="#">German</a></li>
						</ul>
					</li>
				</ul>
			</div> --><!-- /.cnt-cart -->
			<div class="clearfix"></div>
		</div> --><!-- /.header-top-inner -->
	</div><!-- /.container -->
</div><!-- /.header-top -->
<!-- ============================================== TOP MENU : END ============================================== -->
	<div class="main-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
					<!-- ============================================================= LOGO ============================================================= -->
<div class="logo">
	<a href="{{url('/')}}">
		<img style="width: 139px;height: 72px;margin-top: -13px;" src="{{asset('public/logo/logo.png')}}" alt="PackFracture">

	</a>
</div><!-- /.logo -->
<!-- ============================================================= LOGO : END ============================================================= -->				</div><!-- /.logo-holder -->

				<div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
					<!-- /.contact-row -->
<!-- ============================================================= SEARCH AREA ============================================================= -->
<div class="search-area">
    <form>
        <div class="control-group">

            <!-- <ul class="categories-filter animate-dropdown">
                <li class="dropdown">

                    <a class="dropdown-toggle"  data-toggle="dropdown" href="category.html">Categories <b class="caret"></b></a>

                    <ul class="dropdown-menu" role="menu" >
                        <li class="menu-header">Computer</li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Clothing</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Electronics</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Shoes</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Watches</a></li>

                    </ul>
                </li>
            </ul> -->

            <input class="search-field" placeholder="Search here..." />

            <a class="search-button" href="#" ></a>    

        </div>
    </form>
</div><!-- /.search-area -->
<!-- ============================================================= SEARCH AREA : END ============================================================= -->				</div><!-- /.top-search-holder -->

				<div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">
					<!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

	<!-- <div class="dropdown dropdown-cart">
		<a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
			<div class="items-cart-inner">
            <div class="basket">
					<i class="glyphicon glyphicon-shopping-cart"></i>
				</div>
				<div class="basket-item-count"><span class="count">2</span></div>
				<div class="total-price-basket">
					<span class="lbl">cart -</span>
					<span class="total-price">
						<span class="sign">$</span><span class="value">600.00</span>
					</span>
				</div>
				
			
		    </div>
		</a>
		<ul class="dropdown-menu">
			<li>
				<div class="cart-item product-summary">
					<div class="row">
						<div class="col-xs-4">
							<div class="image">
								<a href="detail.html"><img src="{{asset('public/front/images/cart.jpg')}}" alt=""></a>
							</div>
						</div>
						<div class="col-xs-7">
							
							<h3 class="name"><a href="index8a95.html?page-detail">Simple Product</a></h3>
							<div class="price">$600.00</div>
						</div>
						<div class="col-xs-1 action">
							<a href="#"><i class="fa fa-trash"></i></a>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			<hr>
		
			<div class="clearfix cart-total">
				<div class="pull-right">
					
						<span class="text">Sub Total :</span><span class='price'>$600.00</span>
						
				</div>
				<div class="clearfix"></div>
					
				<a href="checkout.html" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a>	
			</div>
					
				
		</li>
		</ul>
	</div> --><!-- /.dropdown-cart -->

<!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->				</div><!-- /.top-cart-row -->
			</div><!-- /.row -->

		</div><!-- /.container -->

	</div><!-- /.main-header -->

	<!-- ============================================== NAVBAR ============================================== -->
<div class="header-nav animate-dropdown">
    <div class="container">
        <div class="yamm navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="nav-bg-class">
                <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
	<div class="nav-outer">
		<ul class="nav navbar-nav">
			<!-- <li class="active dropdown yamm-fw">
				<a href="{{url('/')}}">Home</a>
				
			</li> -->
			@foreach($categories as $category)
			@if(count($category->child)>0)
			<li class="dropdown yamm mega-menu">
				<a href="{{route('categoryShop',['slug'=>$category->slug])}}" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">{{$category->title}}</a>
                <ul class="dropdown-menu container">
					<li>
               						<div class="yamm-content ">
            	<div class="row">
                @if(count($category->child)>0)
                   <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                        <ul class="links">
                        	<li><a href="{{route('categoryShop',['slug'=>$category->slug])}}">{{$category->title}}</a></li>
                        	@foreach($category->child as $cat)
                        		<li><a href="{{route('categoryShop',['slug'=>$cat->slug])}}">{{$cat->title}}</a></li>
                        	@endforeach
                        </ul>
                    </div><!-- /.col -->
                @endif
                    

                    
       <div class="col-xs-12 col-sm-6 col-md-4 col-menu banner-image">
                                    <img class="img-responsive" src="{{asset('public/front/images/banners/top-menu-banner.jpg')}}" alt="">
                              
                            
      
   
       
 
</div><!-- /.yamm-content -->					
</div>
</div>

</li>
				</ul>
				
			</li>
			@else
				<li class="dropdown hidden-sm">
				<a href="{{route('categoryShop',['slug'=>$category->slug])}}">{{$category->title}}</a>
			</li>
			@endif
			@endforeach
             <!-- <li class="dropdown  navbar-right special-menu">
				<a href="#">Todays offer</a>
			</li> -->
					
			
		</ul><!-- /.navbar-nav -->
		<div class="clearfix"></div>				
	</div><!-- /.nav-outer -->
</div><!-- /.navbar-collapse -->


            </div><!-- /.nav-bg-class -->
        </div><!-- /.navbar-default -->
    </div><!-- /.container-class -->

</div><!-- /.header-nav -->
<!-- ============================================== NAVBAR : END ============================================== -->

</header>

@yield('content')

<footer id="footer" class="footer color-bg">


    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">Contact Us</h4>
                    </div><!-- /.module-heading -->

                    <div class="module-body">
        <ul class="toggle-footer" style="">
            <li class="media">
                <div class="pull-left">
                     <span class="icon fa-stack fa-lg">
                            <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="media-body">
                    <p>Infinity Packaging & Services, Ajmer, Rajasthan</p>
                </div>
            </li>

              <li class="media">
                <div class="pull-left">
                     <span class="icon fa-stack fa-lg">
                      <i class="fa fa-mobile fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="media-body">
                    <p>+91-8081116566</p>
                </div>
            </li>

              <li class="media">
                <div class="pull-left">
                     <span class="icon fa-stack fa-lg">
                      <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="media-body">
                    <span><a href="mailto:info@packfacture.com">info@packfacture.com</a></span>
                </div>
            </li>
              
            </ul>
    </div><!-- /.module-body -->
                </div><!-- /.col -->

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <!-- <div class="module-heading">
                        <h4 class="module-title">Customer Service</h4>
                    </div> --><!-- /.module-heading -->

                    <!-- <div class="module-body">
                        <ul class='list-unstyled'>
                            <li class="first"><a href="#" title="Contact us">My Account</a></li>
                <li><a href="#" title="About us">Order History</a></li>
                <li><a href="#" title="faq">FAQ</a></li>
                <li><a href="#" title="Popular Searches">Specials</a></li>
                <li class="last"><a href="#" title="Where is my order?">Help Center</a></li>
                        </ul>
                    </div> --><!-- /.module-body -->
                </div><!-- /.col -->

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <!-- <div class="module-heading">
                        <h4 class="module-title">Why Choose Us</h4>
                    </div> --><!-- /.module-heading -->

                    <!-- <div class="module-body">
                        <ul class='list-unstyled'>
                            <li class="first"><a href="#" title="About us">Shopping Guide</a></li>
                <li><a href="#" title="Blog">Blog</a></li>
                <li><a href="#" title="Company">Company</a></li>
                <li><a href="#" title="Investor Relations">Investor Relations</a></li>
                <li class=" last"><a href="contact-us.html" title="Suppliers">Contact Us</a></li>
                        </ul>
                    </div> --><!-- /.module-body -->
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">Corporation</h4>
                    </div><!-- /.module-heading -->

                    <div class="module-body">
                        <ul class='list-unstyled'>
                          <li class="first"><a title="Your Account" href="{{route('aboutUs')}}">About us</a></li>
                <li><a title="Information" href="{{route('privacyPolicy')}}">Privacy Policy</a></li>
                <!-- <li><a title="Addresses" href="#">Company</a></li>
                <li><a title="Addresses" href="#">Investor Relations</a></li>
                <li class="last"><a title="Orders History" href="#">Advanced Search</a></li> -->
                        </ul>
                    </div><!-- /.module-body -->
                </div><!-- /.col -->
            </div>
        </div>
    </div>

    <div class="copyright-bar">
        <div class="container">
            <div class="col-xs-12 col-sm-6 no-padding social">
                <ul class="link">
                  <li class="fb pull-left"><a target="_blank" rel="nofollow" href="https://www.facebook.com/infinitybottles/" title="Facebook"></a></li>
                  <li class="tw pull-left"><a target="_blank" rel="nofollow" href="https://twitter.com/packfacture" title="Twitter"></a></li>
                  <li class="googleplus pull-left"><a target="_blank" rel="nofollow" href="mailto:packfacture@gmail.com" title="GooglePlus"></a></li>
                  <!-- <li class="rss pull-left"><a target="_blank" rel="nofollow" href="#" title="RSS"></a></li>
                  <li class="pintrest pull-left"><a target="_blank" rel="nofollow" href="#" title="PInterest"></a></li> -->
                  <li class="linkedin pull-left"><a target="_blank" rel="nofollow" href="https://www.linkedin.com/company/packfacture/" title="Linkedin"></a></li>
                  <!-- <li class="youtube pull-left"><a target="_blank" rel="nofollow" href="#" title="Youtube"></a></li> -->
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6 no-padding">
                <div class="clearfix payment-methods">
                    <ul>
                        <li><img src="{{asset('public/front/images/payments/1.png')}}" alt=""></li>
                        <li><img src="{{asset('public/front/images/payments/2.png')}}" alt=""></li>
                        <li><img src="{{asset('public/front/images/payments/3.png')}}" alt=""></li>
                        <li><img src="{{asset('public/front/images/payments/4.png')}}" alt=""></li>
                        <li><img src="{{asset('public/front/images/payments/5.png')}}" alt=""></li>
                    </ul>
                </div><!-- /.payment-methods -->
            </div>
        </div>
    </div>
</footer>
<!-- ============================================================= FOOTER : END============================================================= -->


	<!-- For demo purposes – can be removed on production -->
	
	
	<!-- For demo purposes – can be removed on production : End -->

	<!-- JavaScripts placed at the end of the document so the pages load faster -->
	<script src="{{asset('public/front/js/jquery-1.11.1.min.js')}}"></script>
	
	<script src="{{asset('public/front/js/bootstrap.min.js')}}"></script>
	
	<script src="{{asset('public/front/js/bootstrap-hover-dropdown.min.js')}}"></script>
	<script src="{{asset('public/front/js/owl.carousel.min.js')}}"></script>
	
	<script src="{{asset('public/front/js/echo.min.js')}}"></script>
	<script src="{{asset('public/front/js/jquery.easing-1.3.min.js')}}"></script>
	<script src="{{asset('public/front/js/bootstrap-slider.min.js')}}"></script>
    <script src="{{asset('public/front/js/jquery.rateit.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/front/js/lightbox.min.js')}}"></script>
    <script src="{{asset('public/front/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('public/front/js/wow.min.js')}}"></script>
	<script src="{{asset('public/front/js/scripts.js')}}"></script>
	<script src="{{asset('public/js/toastr.min.js')}}"></script>
	@yield('js')


	
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119931810-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-119931810-1');
</script>

</body>

<!-- Mirrored from www.themesground.com/flipmart-demo/V2/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 May 2018 13:25:41 GMT -->
</html>