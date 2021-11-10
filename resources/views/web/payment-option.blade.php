@extends('web.includes.master')
@section('title', 'Payment Option')
@section('addStyle')

@endsection
@section('content')

<!-- Comparison Table Section Starts Here -->
<section class="comparison-sec yellow-bg">
	<div class="container comparison-sec1 pad-top-20 pad-bot-20">
		<div class="row">
		 	<div class="col-md-4 col-lg-3 col-sm-4 col-xs-4">
		 		<div class="steps-text">
		 			<h5 class="no-margin blue-color active"> <span class="m-r-10"> 1 </span> Order Details</h5>
		 		</div>
		 	</div>
		 	<div class="col-md-4 col-lg-3 col-sm-4 col-xs-4">
		 		<div class="steps-text">
		 			<h5 class="no-margin blue-color"> <span class="m-r-10"> 2 </span> Confirm & Pay</h5>
		 		</div>
		 	</div>
		 	<div class="col-md-4 col-lg-3 col-sm-4 col-xs-4">
		 		<div class="steps-text">
		 			<h5 class="no-margin blue-color"> <span class="m-r-10"> 3 </span> Submit Requirements</h5>
		 		</div>
		 	</div>
 		</div>
 	</div>
</section>
<!-- Comparison Table Section Ends Here -->

<!-- Steps Section Starts Here -->
<section> 
 	<div class="container pad-top-50 pad-bot-50"> 
		<div class="row">
			<div class="col-lg-8 col-md-4">				
				<div class="payment-data">
					<h3 class="no-margin"> Payment Options </h3>
					<hr>
					<div class="creditcard-section pad-top-10">
						<input type="radio" id="creditcard" name="payment" value="creditcard">
						<label for="creditcard" class="blue-color">Credit & Debit Cards <img src="{{URL::to('/public/website')}}/images/visa-card.png" width="10%"></label>
					</div>					
					<div class="payment-data-inner pad-top-30">
						<form>
							<div class="row">
								<div class="col-lg-4">
									<div class="payment-data-inner-1">
										<p class="no-margin blue-color"> Card Number </p>
										<input type="text" class="payment-data-inner-input" placeholder="" name="card-number">
									</div>									
								</div>
								<div class="col-lg-4">
									<div class="payment-data-inner-1">
										<p class="no-margin blue-color"> Expiration Date </p>
										<input type="date" class="payment-data-inner-input" name="card-start-date">
									</div>									
								</div>
								<div class="col-lg-4">
									<div class="payment-data-inner-1">
										<p class="no-margin blue-color"> Security Code </p>
										<input type="text" class="payment-data-inner-input" name="card-cvv">
									</div>									
								</div>
								<div class="col-lg-6 pad-top-30">
									<div class="payment-data-inner-1">
										<p class="no-margin blue-color"> First Name </p>
										<input type="text" class="payment-data-inner-input" name="fitst-name">
									</div>									
								</div>
								<div class="col-lg-6 pad-top-30">
									<div class="payment-data-inner-1">
										<p class="no-margin blue-color"> Last Name </p>
										<input type="text" class="payment-data-inner-input" name="last-name">
									</div>									
								</div>								
							</div>
						</form>
					</div>
					<div class="creditcard-section pad-top-20">
						<input type="radio" id="paypal" name="payment" value="paypal">
						<label for="paypal" class="blue-color"> <img src="{{URL::to('/public/website')}}/images/paypal.png" width="15%"></label>
					</div>			
				</div>
			</div>

			<div class="col-lg-4 col-md-4">
				<div class="payment-summary">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-12">
							<img alt="service-image" src="{{URL::to('/public/website')}}/images/work-image1.jpg">
						</div>
						<div class="col-lg-7 col-md-6 col-12 no-pad">
							<div class="summary-text">
								<p class="no-margin blue-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
							</div>						
						</div>						
					</div>
					<hr>
					<div class="payment-summary-2">
						<div class="row">
							<div class="col-lg-8">
								<div class="summary2-text">
									<h2 class="no-margin blue-color"><b>Premium Website</b></h2>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="summary2-text">
									<h3 class="no-margin"><b>$6,500</b></h3>
								</div>						
							</div>
							<div class="col-lg-12">
								<div class="summary2-text pad-top-10">
									<h4 class="blue-color"><i class="fa fa-check yellow-color"></i>&nbsp; Unlimited Revisions</h4>
									<h4 class="blue-color"><i class="fa fa-check yellow-color"></i>&nbsp; Source Code</h4>
								</div>						
							</div>
							<div class="col-lg-12">
								<div class="summary2-text pad-top-20 pad-bot-20">
									<h2 class="no-margin blue-color"><b>Enter promo code ?</b></h2>
								</div>						
							</div>
							<div class="col-lg-6">
								<div class="summary2-text pad-bot-10">
									<h4 class="no-margin blue-color">Service Fee?</h4>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="summary2-text">
									<h3 class="no-margin"><b>$6,500</b></h3>
								</div>						
							</div>
							<div class="col-lg-8">
								<div class="summary2-text pad-bot-10">
									<h4 class="no-margin blue-color">Total Delivery Time</h4>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="summary2-text">
									<h3 class="no-margin"><b>29 days</b></h3>
								</div>						
							</div>
							<div class="col-lg-6">
								<div class="summary2-text pad-bot-10">
									<h2 class="no-margin blue-color">Total</h2>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="summary2-text">
									<h3 class="no-margin"><b>$6,500</b></h3>
								</div>						
							</div>
							<div class="col-lg-12 pad-top-20">
								<a href="" class="payment-confirm-btn yellow-bg">Confirm & Pay</a>
							</div>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Checkout Section Ends Here -->

@endsection