@extends('web.includes.master')
@section('title', 'Thank you for Booking')
@section('addStyle')

@endsection
@section('content')

<!-- Comparison Table Section Starts Here -->
<section class="comparison-sec yellow-bg">
	<div class="container comparison-sec1 pad-top-20 pad-bot-20">
		<div class="row">
		 	<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
		 		<div class="steps-text">
		 			<h5 class="no-margin blue-color "> <span class="m-r-10"> 1 </span> Order Details</h5>
		 		</div>
		 	</div>
		 	<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
		 		<div class="steps-text">
		 			<h5 class="no-margin blue-color"> <span class="m-r-10"> 2 </span> Confirm & Pay</h5>
		 		</div>
		 	</div>
		 	<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
		 		<div class="steps-text">
		 			<h5 class="no-margin blue-color active"> <span class="m-r-10"> 3 </span> Submit Requirements</h5>
		 		</div>
		 	</div>
 		</div>
 	</div>
</section>
<!-- Comparison Table Section Ends Here -->

<section style="background: #f6f6f6;">
	<div class="container pad-top-40 pad-bot-40">
		<div class="thankyou-book-sec">
			<h2 class="no-margin blue-color">Thank you for your booking!</h2>
			<p class="no-margin pad-top-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
		</div>		
	</div>
</section>

<section> 
 	<div class="container pad-top-50 pad-bot-50">
 		<div class="row">
			<div class="col-lg-6 col-md-6 col-6">
				<div class="thankyou-book-sec-1 pad-bot-20">
					<h2 class="no-margin blue-color">Home Maintenance</h2>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-6">
				<div class="thankyou-book-sec-2 pad-bot-20">
					<h3 class="no-margin">Booking Total: <span class="blue-color"><b>$3127.98</b></span></h3> 
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<div class="thankyou-book-sec-3">
					<img src="{{URL::to('/public/website')}}/images/work-image1.jpg">
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-6">
				<div class="thankyou-book-sec-4 pad-left-20">
					<p>Radius</p>
					<p>Price</p>
					<p>Time Duration</p>
					<p>Trial period</p>
					<p>Service Type</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-6">
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
			<div class="col-lg-12 col-md-12 col-12">
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

<!-- Steps Section Starts Here -->
<section style="background:#F2F2F2;"> 
 	<div class="container pad-top-20 pad-bot-50"> 
		<div class="row">
			<div class="col-lg-12 col-md-12 col-12">
				<div class="thankyou-book-sec-6">
					<h2 class="no-margin">Your Information</h2>
					<hr>
				</div>				
			</div>
			<div class="col-lg-6 col-md-6 col-5">
				<div class="thankyou-book-sec-7">
					<p>Aspinall Dr.s</p>
					<p>Aspinall Dr.s</p>
				</div>				
			</div>
			<div class="col-lg-6 col-md-6 col-7">
				<div class="thankyou-book-sec-7">
					<p>710 mariners, island blvd,</p>
					<p>app 210</p>
					<p>san marito, ca 099404</p>
					<p>united states</p>
					<p>(315) 396-78831</p>
				</div>				
			</div>
			<div class="col-lg-12 col-md-12 col-12">
				<div class="thankyou-book-sec-6">
					<h2 class="no-margin">Payment</h2>
					<hr>
				</div>				
			</div>
			<div class="col-lg-6 col-md-6 col-7">
				<div class="thankyou-book-sec-7">
					<p><img src="{{URL::to('/public/website')}}/images/visa-card.jpg"> <b>Visa card ending in 1234</b></p>
				</div>				
			</div>
			<div class="col-lg-6 col-md-6 col-5">
				<a href="#" class="thankyou-book-sec-8">Cancel Service</a>				
			</div>
		</div>
	</div>
</section>
<!-- Checkout Section Ends Here -->

@endsection