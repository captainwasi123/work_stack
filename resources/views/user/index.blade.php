@extends('user.includes.master')
@section('title', 'Dashboard | My Account')
@section('addStyle')

@endsection
@section('content')

<!-- Comparison Table Section Starts Here -->
<section class="comparison-sec">
	<div class="comparison-sec1 yellow-bg pad-top-20 pad-bot-20">
		<h3 class="blue-color no-margin text-center"> My Account </h3>
	</div>

	<div class="container pad-top-50 pad-bot-50">
		<div class="row">
			<div class="col-md-4 col-lg-3 col-sm-4 col-xs-12 pad-bot-50">
				<div class="account-handlers">
					<ul>
						<li class="active"> <a href="#"><i class="fa fa-folder"></i>My Disputes </a> </li>
						<li> <a href="#"><i class="fa fa-user"></i>Personal Details </a> </li>
						<li> <a href="#"><i class="fa fa-key"></i>Reset Password </a> </li>
						<li> <a href="#"><i class="fa fa-credit-card"></i>My Transactions </a> </li>
						<li> <a href="#"><i class="fa fa-star"></i>My Favorites </a> </li>
					</ul>
				</div>
			</div>
			<div class="col-md-8 col-lg-9 col-sm-8 col-xs-12">
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
			</div>
		</div>
	</div>
</section>
<!-- Comparison Table Section Ends Here -->

@endsection