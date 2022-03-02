@extends('user.includes.master')
@section('title', 'Dashboard | My Account')
@section('addStyle')

@endsection
@section('content')

<!-- Comparison Table Section Starts Here -->
<div class="account-over pad-right-20">
					<div class="dispute-box pad-bot-20 m-b-30">
						<div class="dispute-head pad-bot-40">
							<div class="dispute-number">
								<h5 class="no-margin blue-color"> <b>Order ID: 3434524 232 DF </b> </h5>
							</div>
							<div class="dispute-status">
								<h5 class="no-margin"> <span class="col-green"> RESOLVED  </span> On Thu, 3 Oct </h5>
							</div>
						</div>
						<div class="dispute-detail">
							<div class="row">
								<div class="col-lg-4">
									<img alt="order-image" src="{{URL::to('/public/website')}}/images/work-image1.jpg"/>
								</div>
								<div class="col-lg-8">
									<p class="no-margin">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
								</div>
							</div>
						</div>
					</div>
					<div class="dispute-box pad-bot-20 m-b-30">
						<div class="dispute-head pad-bot-40">
							<div class="dispute-number">
								<h5 class="no-margin blue-color"> <b>Order ID: 3434524 232 DF </b> </h5>
							</div>
							<div class="dispute-status">
								<h5 class="no-margin"> <span class="col-green"> RESOLVED  </span> On Thu, 3 Oct </h5>
							</div>
						</div>
						<div class="dispute-detail">
							<div class="row">
								<div class="col-lg-4">
									<img alt="order-image" src="{{URL::to('/public/website')}}/images/work-image1.jpg"/>
								</div>
								<div class="col-lg-8">
									<p class="no-margin">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
								</div>
							</div>
						</div>
					</div>
					<div class="dispute-box pad-bot-20 m-b-30">
						<div class="dispute-head pad-bot-40">
							<div class="dispute-number">
								<h5 class="no-margin blue-color"> <b>Order ID: 3434524 232 DF </b> </h5>
							</div>
							<div class="dispute-status">
								<h5 class="no-margin"> <span class="col-green"> RESOLVED  </span> On Thu, 3 Oct </h5>
							</div>
						</div>
						<div class="dispute-detail">
							<div class="row">
								<div class="col-lg-4">
									<img alt="order-image" src="{{URL::to('/public/website')}}/images/work-image1.jpg"/>
								</div>
								<div class="col-lg-8">
									<p class="no-margin">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
								</div>
							</div>
						</div>
					</div>
			
				</div>
<!-- Comparison Table Section Ends Here -->

@endsection