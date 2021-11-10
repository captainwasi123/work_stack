@extends('web.includes.master')
@section('title', 'Services')
@section('addStyle')

@endsection
@section('content')

<!-- Banner Section Starts Here -->
<section class="banner-sec pad-top-70">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-12">
				<div class="banner-form pad-top-70 pad-right-60">
					<h3 class="no-margin blue-color">The Best Explore your Neighbourhood.</h3>
					<form>
						<div class="form-search1">
						<input type="text" placeholder="Search Your Product / Service" name="search-field">
						</div>
						<div class="form-search2">		
						<input type="submit" name="submit">
						</div>
					</form>
					<div class="search-catagory pad-top-20">
						<div class="row">
							<div class="col-lg-2">
								<div class="search-catagory-section1">
									<h4 class="blue-color">Popular: </h4>
								</div>									
							</div>
							<div class="col-lg-10 no-pad">
								<button>Books</button>	
								<button>Tutor</button>
								<button>Grocery</button>
								<button>Grocery</button>	
								<button>Beautician</button>	
							</div>							
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="{{URL::to('/public/website')}}/images/header-banner.png"/>
			</div>
		</div>
	</div>
</section>


<section>
	<div class="container pad-top-120 pad-bot-100">
		<div class="sec-head pad-bot-30">
			<h4 class="no-margin blue-color">Services </h4>
		</div>	
		<div class="services">
			<div class="row">
			 	<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 services-box">
			 		<img alt="product-image" src="{{URL::to('/public/website')}}/images/work-image1.jpg"/>
				 	<div class="services-inner pad-top-30 pad-bot-10 pad-left-20 pad-right-20">				 		
				 		<div class="row">
				 			<div class="col-md-6">
				 				<img alt="product-image" src="{{URL::to('/public/website')}}/images/boy.png"/> 
				 				<span class="services-title">Home</span>
				 			</div>
				 			<div class="col-md-6">
				 				<span class="services-inner-1 pad-top-10">
				 					<img src="{{URL::to('/public/website')}}/images/heart-icon.png">
				 					<img src="{{URL::to('/public/website')}}/images/calendar-icon2.jpg">
				 				</span>
				 			</div>
				 			<div class="col-md-12 pad-bot-20">
				 				<p class="no-margin pad-top-10 services-inner-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>				 				
				 			</div>
				 			<div class="col-md-6">
				 				<span class="rating-section"><i class="fa fa-star star-on"> 5.0 </i> (17)</span>
				 			</div>
				 			<div class="col-md-6">
				 				<h5 class="price-section no-margin"> Starting At $1000 </h5> 
				 			</div>
				 			<div class="col-md-12">
				 				<hr>
								<div class="services-inner-btn">
							 		<a href="" class="services-inner-btn1"> SELECT & PROCEED </a>
							 		<a href="" class="services-inner-btn2"> ADD COMMISION </a>
							 	</div>				 				
				 			</div>		 			
				 		</div>
				 	</div>
			 	</div>
			 	<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 services-box">
			 		<img alt="product-image" src="{{URL::to('/public/website')}}/images/work-image1.jpg"/>
				 	<div class="services-inner pad-top-30 pad-bot-10 pad-left-20 pad-right-20">				 		
				 		<div class="row">
				 			<div class="col-md-6">
				 				<img alt="product-image" src="{{URL::to('/public/website')}}/images/boy.png"/> 
				 				<span class="services-title">Home</span>
				 			</div>
				 			<div class="col-md-6">
				 				<span class="services-inner-1 pad-top-10">
				 					<img src="{{URL::to('/public/website')}}/images/heart-icon.png">
				 					<img src="{{URL::to('/public/website')}}/images/calendar-icon2.jpg">
				 				</span>
				 			</div>
				 			<div class="col-md-12 pad-bot-20">
				 				<p class="no-margin pad-top-10 services-inner-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>				 				
				 			</div>
				 			<div class="col-md-6">
				 				<span class="rating-section"><i class="fa fa-star star-on"> 5.0 </i> (17)</span>
				 			</div>
				 			<div class="col-md-6">
				 				<h5 class="price-section no-margin"> Starting At $1000 </h5> 
				 			</div>
				 			<div class="col-md-12">
				 				<hr>
								<div class="services-inner-btn">
							 		<a href="" class="services-inner-btn1"> SELECT & PROCEED </a>
							 		<a href="" class="services-inner-btn2"> ADD COMMISION </a>
							 	</div>				 				
				 			</div>		 			
				 		</div>
				 	</div>
			 	</div>
			 	<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 services-box">
			 		<img alt="product-image" src="{{URL::to('/public/website')}}/images/work-image1.jpg"/>
				 	<div class="services-inner pad-top-30 pad-bot-10 pad-left-20 pad-right-20">				 		
				 		<div class="row">
				 			<div class="col-md-6">
				 				<img alt="product-image" src="{{URL::to('/public/website')}}/images/boy.png"/> 
				 				<span class="services-title">Home</span>
				 			</div>
				 			<div class="col-md-6">
				 				<span class="services-inner-1 pad-top-10">
				 					<img src="{{URL::to('/public/website')}}/images/heart-icon.png">
				 					<img src="{{URL::to('/public/website')}}/images/calendar-icon2.jpg">
				 				</span>
				 			</div>
				 			<div class="col-md-12 pad-bot-20">
				 				<p class="no-margin pad-top-10 services-inner-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>				 				
				 			</div>
				 			<div class="col-md-6">
				 				<span class="rating-section"><i class="fa fa-star star-on"> 5.0 </i> (17)</span>
				 			</div>
				 			<div class="col-md-6">
				 				<h5 class="price-section no-margin"> Starting At $1000 </h5> 
				 			</div>
				 			<div class="col-md-12">
				 				<hr>
								<div class="services-inner-btn">
							 		<a href="" class="services-inner-btn1"> SELECT & PROCEED </a>
							 		<a href="" class="services-inner-btn2"> ADD COMMISION </a>
							 	</div>				 				
				 			</div>		 			
				 		</div>
				 	</div>
			 	</div>
 			</div> 
		</div>
	</div>
</section>
<!-- Nearby Services Section Ends Here -->

@endsection