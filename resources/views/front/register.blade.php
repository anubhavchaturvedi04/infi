@extends('layouts.front')
@section('content')
<div class="body-content">
	<div class="container">
		<div class="sign-in-page">
			<div class="row">
				<!-- Sign-in -->			
<div class="col-md-6 col-sm-6 sign-in">
	<h4 class="">Sign in</h4>
	<p class="">Hello, Welcome to your account.</p>
	<!-- <div class="social-sign-in outer-top-xs">
		<a href="#" class="facebook-sign-in"><i class="fa fa-facebook"></i> Sign In with Facebook</a>
		<a href="#" class="twitter-sign-in"><i class="fa fa-twitter"></i> Sign In with Twitter</a>
	</div> -->
	<form class="register-form outer-top-xs" action="{{route('login')}}" role="form" method="post">
		{{csrf_field()}}
		<div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
		    <input type="email" name="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
		</div>
	  	<div class="form-group">
		    <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
		    <input type="password" name="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1">
		</div>
		<!-- <div class="radio outer-xs">
		  	<label>
		    	<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Remember me!
		  	</label>
		  	<a href="#" class="forgot-password pull-right">Forgot your Password?</a>
		</div> -->
	  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Login</button>
	</form>					
</div>
<!-- Sign-in -->

<!-- create a new account -->
<div class="col-md-6 col-sm-6 create-new-account">
	<h4 class="checkout-subtitle">Create a new account</h4>
	<p class="text title-tag-line">Create your new account.</p>
	<form class="register-form outer-top-xs" action="{{route('register')}}" role="form" method="post">
		{{csrf_field()}}
		<input type="hidden" name="role_id" value="3">
		<div class="form-group">
	    	<label class="info-title" for="exampleInputEmail2">Email Address <span>*</span></label>
	    	<input type="email" name="email" class="form-control unicase-form-control text-input" id="exampleInputEmail2">
	  	</div>
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Name <span>*</span></label>
		    <input type="text" name="name"  class="form-control unicase-form-control text-input" id="exampleInputEmail1">
		</div>
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Phone Number <span>*</span></label>
		    <input type="text" name="phone" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
		</div>
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Password <span>*</span></label>
		    <input type="password" name="password" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
		</div>
         <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Confirm Password <span>*</span></label>
		    <input type="password" name="password_confirmation" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
		</div>
	  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Sign Up</button>
	</form>
	
	
</div>	
<!-- create a new account -->			</div><!-- /.row -->
		</div><!-- /.sigin-in-->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
<div id="brands-carousel" class="logo-slider wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">

		<div class="logo-slider-inner">	
			<div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme" style="opacity: 1; display: block;">
				<div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 3800px; left: 0px; display: block;"><div class="owl-item" style="width: 190px;"><div class="item m-t-15">
					<a href="#" class="image">
						<img src="assets/images/brands/brand1.png" alt="">
					</a>	
				</div></div><div class="owl-item" style="width: 190px;"><div class="item m-t-10">
					<a href="#" class="image">
						<img src="assets/images/brands/brand2.png" alt="">
					</a>	
				</div></div><div class="owl-item" style="width: 190px;"><div class="item">
					<a href="#" class="image">
						<img src="assets/images/brands/brand3.png" alt="">
					</a>	
				</div></div><div class="owl-item" style="width: 190px;"><div class="item">
					<a href="#" class="image">
						<img src="assets/images/brands/brand4.png" alt="">
					</a>	
				</div></div><div class="owl-item" style="width: 190px;"><div class="item">
					<a href="#" class="image">
						<img src="assets/images/brands/brand5.png" alt="">
					</a>	
				</div></div><div class="owl-item" style="width: 190px;"><div class="item">
					<a href="#" class="image">
						<img src="assets/images/brands/brand6.png" alt="">
					</a>	
				</div></div><div class="owl-item" style="width: 190px;"><div class="item">
					<a href="#" class="image">
						<img src="assets/images/brands/brand2.png" alt="">
					</a>	
				</div></div><div class="owl-item" style="width: 190px;"><div class="item">
					<a href="#" class="image">
						<img src="assets/images/brands/brand4.png" alt="">
					</a>	
				</div></div><div class="owl-item" style="width: 190px;"><div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div></div><div class="owl-item" style="width: 190px;"><div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div></div></div></div><!--/.item-->

				<!--/.item-->

				<!--/.item-->

				<!--/.item-->

				<!--/.item-->

				<!--/.item-->

				<!--/.item-->

				<!--/.item-->

				<!--/.item-->

				<!--/.item-->
		    <div class="owl-controls clickable"><div class="owl-buttons"><div class="owl-prev"></div><div class="owl-next"></div></div></div></div><!-- /.owl-carousel #logo-slider -->
		</div><!-- /.logo-slider-inner -->
	
</div><!-- /.logo-slider -->
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div>
@stop