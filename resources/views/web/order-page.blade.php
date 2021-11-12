@extends('web.includes.master')
@section('title', 'Order Page')
@section('addStyle')

@endsection
@section('content')

<!-- Comparison Table Section Starts Here -->
<section class="comparison-sec yellow-bg">
	<div class="comparison-sec1 yellow-bg pad-top-20 pad-bot-20">
		<h3 class="blue-color no-margin text-center"> Home Cooked Food </h3>
	</div>
</section>
<!-- Comparison Table Section Ends Here -->

<section> 
 	<div class="container pad-top-50 pad-bot-50">
 		<div class="row">
			<div class="col-lg-5 col-9 col-md-6">
				<div class="thankyou-book-sec-1 pad-bot-40">
					<h2 class="no-margin blue-color"><img src="{{URL::to('/public/website')}}/images/product-avatar1.jpg"> Home Maintenance</h2>
				</div>
			</div>
			<div class="col-lg-1 col-3 col-md-2">
				<div class="product_quantity pad-top-20">
					<input type="number" pattern="[0-9]*" value="1">
                </div>
			</div>
			<div class="col-lg-6 col-md-4 col-12">
				<div class="thankyou-book-sec-2 pad-bot-40">
					<h3 class="no-margin">Booking Total <span class="blue-color"><b>$3127.98</b></span></h3> 
				</div>
			</div>
			<div class="col-lg-6 col-md-12 col-12">
				<div class="thankyou-book-sec-3">
					<img src="{{URL::to('/public/website')}}/images/work-image1.jpg">
				</div>
			</div>
			<div class="col-lg-3 col-md-7 col-7">
				<div class="thankyou-book-sec-4 pad-left-20">
					<p>Radius</p>
					<p>Price</p>
					<p>Time Duration</p>
					<p>Trial period</p>
					<p>Service Type</p>
					<a href="#" class="thankyou-book-sec-8">Order Product</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-5 col-5">
				<div class="thankyou-book-sec-4">
					<p><b>4.6 Suburbs</b></p>
					<p><b>$293.00</b></p>
					<p><b>3 Hours</b></p>
					<p><b>1 Time</b></p>
					<p><b>Face to face</b></p>
				</div>
			</div>	
 		</div>
 	</div>
</section>

<section style="background:#F2F2F2;">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="thankyou-book-sec-5 pad-top-50 pad-bot-20">
					<h2 class="no-margin blue-color pad-bot-20">Information Services:</h2>
					<p><i class="fa fa-check-circle"></i>&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. </p>
					<p><i class="fa fa-check-circle"></i>&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. </p>
					<p><i class="fa fa-check-circle"></i>&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. </p>
				</div>
			</div>
		</div>		
	</div>
</section>

@endsection