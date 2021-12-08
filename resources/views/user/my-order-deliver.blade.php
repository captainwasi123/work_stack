@extends('user.includes.master')
@section('title', 'My Order Deliver')
@section('addStyle')

@endsection
@section('content')

<!-- Comparison Table Section Starts Here -->
<section class="comparison-sec">
	<div class="comparison-sec1 yellow-bg pad-top-20 pad-bot-20">
		<h3 class="blue-color no-margin text-center"> My Orders/Services </h3>
	</div>

	<div class="container pad-top-50 pad-bot-50">
		<div class="row">
			<div class="col-md-12 col-lg-12 col-sm-4 col-xs-12">		
				<div class="orders-filters">
				 	<div class="row">
					 	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
						 	<div class="sort-by2 pad-top-10">
								<span class="pad-right-10"> Sort By: </span>
								<select>
									<option> Orders </option>
									<option> Orders </option>
									<option> Orders </option>
									<option> Orders </option>
								</select>
							</div>
					 	</div>
					 	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
						 	<div class="orders-filters-data ">
								<button class="orders-filters-data-btn active"> Upcoming  </button>
							    <button class="orders-filters-data-btn "> Delivered </button>
							</div>
					 	</div>					 	
				 	</div>
				</div>
			</div>

			<div class="col-md-12 col-lg-12 col-sm-4 col-xs-12">
				<div class="all-orders">
					<div class="order-box pad-top-30 pad-bot-10">
						<div class="pad-bot-20">
							<div class="row">
								<div class="col-lg-12">
									<div class="order-status">
										<h5 class="no-margin"> 
										<span class="col-red pad-right-10"> <img alt="check-icon" class="col-red" src="{{URL::to('/public/website')}}/images/tick-icon.svg" width="20"/> DELIVERED  </span>
										<b> On Thu, 3 Oct </b> 
									</h5>
									</div>	
								</div>							
							</div>						
						</div>
						<div class="order-details">
							<div class="row">
								<div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
									<div class="order-image">
										<img alt="order-image" src="{{URL::to('/public/website')}}/images/order-image1.jpg"/>
									</div>	
								</div>
								<div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
									<div class="order-text1">
										<h4 class="no-margin pad-top-30 pad-bot-10"> Brown Sofa Set </h4>
										<h5 class="no-margin pad-bot-10"> <span> <b>Item: </b></span> 2 </h5>
										<h5 class="no-margin pad-bot-10"> <span> <b>Size: </b> </span> 4 feet </h5>
										<h5 class="no-margin pad-bot-10"> <span> <b>Sold by: </b></span> Washing Wagon </h5>
									</div>	
								</div>
								<div class="col-md-2 col-lg-2 col-sm-6 col-xs-12">
									<div class="order-text2">
										<h5 class="no-margin pad-bot-10 pad-top-30"> Total Price </h5>
										<h3 class="no-margin"> $3137.98  </h3>
									</div>	
								</div>
								<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
									<div class="order-text3 pad-top-30">
										<p class="no-margin pad-bot-20"> 710 Mariners, Island Bird,  App 210 </p>
										<p class="no-margin pad-bot-20"> San Marito, CA 099404 United States </p>
										<p class="no-margin pad-bot-20"> (315) 396-78831 </p>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<div class="order-box pad-top-30 pad-bot-30">
						<div class="pad-bot-20">
							<div class="row">
								<div class="col-lg-12">
									<div class="order-status">
										<h5 class="no-margin"> 
										<span class="col-red pad-right-10"> <img alt="check-icon" class="col-red" src="{{URL::to('/public/website')}}/images/tick-icon.svg" width="20"/> DELIVERED  </span>
										<b> On Thu, 3 Oct </b> 
									</h5>
									</div>	
								</div>							
							</div>						
						</div>
						<div class="order-details">
							<div class="row">
								<div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
									<div class="order-image">
										<img alt="order-image" src="{{URL::to('/public/website')}}/images/order-image1.jpg"/>
									</div>	
								</div>
								<div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
									<div class="order-text1">
										<h4 class="no-margin pad-top-30 pad-bot-10"> Brown Sofa Set </h4>
										<h5 class="no-margin pad-bot-10"> <span> <b>Item: </b></span> 2 </h5>
										<h5 class="no-margin pad-bot-10"> <span> <b>Size: </b> </span> 4 feet </h5>
										<h5 class="no-margin pad-bot-10"> <span> <b>Sold by: </b></span> Washing Wagon </h5>
									</div>	
								</div>
								<div class="col-md-2 col-lg-2 col-sm-6 col-xs-12">
									<div class="order-text2">
										<h5 class="no-margin pad-bot-10 pad-top-30"> Total Price </h5>
										<h3 class="no-margin"> $3137.98  </h3>
									</div>	
								</div>
								<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
									<div class="order-text3 pad-top-30">
										<p class="no-margin pad-bot-20"> 710 Mariners, Island Bird,  App 210 </p>
										<p class="no-margin pad-bot-20"> San Marito, CA 099404 United States </p>
										<p class="no-margin pad-bot-20"> (315) 396-78831 </p>
									</div>	
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