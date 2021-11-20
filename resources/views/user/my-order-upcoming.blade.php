@extends('user.includes.master')
@section('title', 'My Order Upcoming')
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
				<div class="orders-filters pad-bot-30">
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
								<button class="orders-filters-data-btn"> Upcoming  </button>
							    <button class="orders-filters-data-btn active"> Delivered </button>
							</div>
					 	</div>					 	
				 	</div>
				</div>
			</div>

			<div class="col-md-12 col-lg-12 col-sm-4 col-xs-12">
				<div class="all-orders">
					<div class="order-box">
						<div class=" pad-bot-20">
							<div class="row">
								<div class="col-lg-6">
									<div class="order-status">
										<h5 class="no-margin"> 
										<span class="col-green pad-right-10"> <img alt="check-icon" src="{{URL::to('/public/website')}}/images/tick-icon.svg" width="30"/> DELIVERED  </span>
										<b> On Thu, 3 Oct </b> 
									</h5>
									</div>
									
								</div>
								<div class="col-lg-6">
									<div class="order-status2">
										<a href="#" class="blue-color"> Raise Dispute </a>
										<a href="#" class="yellow-color"> Give your Review & Rating </a>
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
	<h4 class="no-margin pad-top-20 pad-bot-10"> Brown Sofa Set </h4>
	<h5> <span> Item: </span> 2 </h5>
	<h5> <span> Size: </span> 4 feet </h5>
	<h5> <span> Sold by: </span> Washing Wagon </h5>
	</div>	
	</div>
	<div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
	<div class="order-text2">
			<h5> Total Price </h5>
	<h3> $3137.98  </h3>

	</div>	
	</div>
	<div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
	<div class="order-text3">
	<p> 710 Mariners, Island Bird,  App 210 </p>
	<p> San Marito, CA 099404 United States </p>
	<p> (315) 396-78831 </p>
	</div>	
	</div>
	</div>
	</div>
	</div>




	<div class="order-box">
	<div class="order-status">
	<div>
	<h5> 
		<span class="col-green"> <img alt="check-icon" src="{{URL::to('/public/website')}}/images/tick-icon.svg" width="30"/> DELIVERED  </span>
		<b> On Thu, 3 Oct </b> 
	</h5>
	</div>
	<div>
		<a href="" class="col-red"> Raise Dispute </a>
		<a href="" class="col-orange"> Give your Review & Rating </a>
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
	<h4> Brown Sofa Set </h4>
	<h5> <span> Item: </span> 2 </h5>
	<h5> <span> Size: </span> 4 feet </h5>
	<h5> <span> Sold by: </span> Washing Wagon </h5>
	</div>	
	</div>
	<div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
	<div class="order-text2">
			<h5> Total Price </h5>
	<h3> $3137.98  </h3>

	</div>	
	</div>
	<div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
	<div class="order-text3">
	<p> 710 Mariners, Island Bird,  App 210 </p>
	<p> San Marito, CA 099404 United States </p>
	<p> (315) 396-78831 </p>
	</div>	
	</div>
	</div>
	</div>
	</div>





	<div class="order-box">
	<div class="order-status">
	<div>
	<h5> 
		<span class="col-green"> <img alt="check-icon" src="{{URL::to('/public/website')}}/images/tick-icon.svg" width="30"/> DELIVERED  </span>
		<b> On Thu, 3 Oct </b> 
	</h5>
	</div>
	<div>
		<a href="" class="col-red"> Raise Dispute </a>
		<a href="" class="col-orange"> Give your Review & Rating </a>
	</div>
	</div>
	<div class="order-details">
	<div class="row">
	<div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
	<div class="order-image">
	<img alt="order-image" src="{{URL::to('/public/website')}}/images/order-image1.jpg">
	</div>	
	</div>
	<div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
	<div class="order-text1">
	<h4> Brown Sofa Set </h4>
	<h5> <span> Item: </span> 2 </h5>
	<h5> <span> Size: </span> 4 feet </h5>
	<h5> <span> Sold by: </span> Washing Wagon </h5>
	</div>	
	</div>
	<div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
	<div class="order-text2">
			<h5> Total Price </h5>
	<h3> $3137.98  </h3>

	</div>	
	</div>
	<div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
	<div class="order-text3">
	<p> 710 Mariners, Island Bird,  App 210 </p>
	<p> San Marito, CA 099404 United States </p>
	<p> (315) 396-78831 </p>
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