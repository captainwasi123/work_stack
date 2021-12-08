@extends('web.includes.master')
@section('title', 'Pricing Package')
@section('addStyle')

@endsection
@section('content')

<!-- Comparison Table Section Starts Here -->
<section class="comparison-sec">
	<div class="comparison-sec1 yellow-bg pad-top-20 pad-bot-20">
		<h3 class="blue-color no-margin text-center">Home Maintenance</h3>
	</div>

	<div class="container pad-top-50">
		<div class="row">
			<div class="col-lg-7 col-md-7 col-12">
				<div class="pricing-pack-section1">
					<h2 class="no-margin blue-color">Home Maintenance & Cleaning</h2>
					<div class="row pad-top-10">
						<div class="col-lg-1 col-md-2 col-3">
							<img alt="product-image" src="{{URL::to('/public/website')}}/images/boy.png"/>  
						</div>
						<div class="col-lg-3 col-md-5 col-5 no-pad" style="border-right: 1px solid #636363;">
							<h4 class="no-margin">Top Rated Saller</h4>
						</div>
						<div class="col-lg-4 col-md-4 col-4" style="padding-top: 3px;">
							<span class="rating-section rate"><i class="fa fa-star star-on"> 5.0 </i> (17)</span>
						</div>
						<div class="col-md-12 pad-top-30">
							<img alt="product-image" src="{{URL::to('/public/website')}}/images/work-image1.jpg" width="100%" />
						</div>										
					</div>
				</div>				
			</div>
			<div class="col-lg-5 col-md-5 col-12">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link active blue-color" data-toggle="tab" href="#basic">Basic</a>
					</li>
					<li class="nav-item">
					    <a class="nav-link blue-color" data-toggle="tab" href="#standard">Standard</a>
					</li>
					<li class="nav-item">
					    <a class="nav-link blue-color" data-toggle="tab" href="#premium">Premium</a>
					</li>
				</ul>

				<div class="tab-content pad-top-30 pad-bot-20 pad-left-10 pad-right-10">
					<div id="basic" class="container tab-pane active">
					  	<div class="pricing-pack-section2">
					   		<h3 class="no-margin blue-color pad-bot-10">Fee Per hour</h3>
							<p class="no-margin">$ 312</p>
							<h3 class="no-margin blue-color pad-top-20 pad-bot-10">Description</h3>
							<p class="no-margin">Hard wood, composit and eco decking done. Onsite inspection and free no obligation quotation provided. Prices starting from $200 per m2</p>
							<h3 class="no-margin blue-color pad-top-20 pad-bot-10"><i class="fa fa-calendar"></i> Delivery</h3>
							<p class="no-margin pad-bot-10"><i class="fa fa-check yellow-color"></i> maintain essential hygiene cleaning</p>
							<p class="no-margin pad-bot-10"><i class="fa fa-check yellow-color"></i> maintain essential hygiene cleaning</p>
							<p class="no-margin pad-bot-30"><i class="fa fa-check yellow-color"></i> maintain essential hygiene cleaning</p>
							<a href="" class="pricing-pack-section-btn yellow-bg"> Continue ($312)</a>
							<a href="" class="pricing-pack-section-btn2 pad-top-20 blue-color"> Compare Pakages</a>
					  	</div>					      
					</div>
					<div id="standard" class="container tab-pane">
					  	<div class="pricing-pack-section2">
					   		<h3 class="no-margin blue-color pad-bot-10">Fee Per hour</h3>
							<p class="no-margin">$ 312</p>
							<h3 class="no-margin blue-color pad-top-20 pad-bot-10">Description</h3>
							<p class="no-margin">Hard wood, composit and eco decking done. Onsite inspection and free no obligation quotation provided. Prices starting from $200 per m2</p>
							<h3 class="no-margin blue-color pad-top-20 pad-bot-10"><i class="fa fa-calendar"></i> Delivery</h3>
							<p class="no-margin pad-bot-10"><i class="fa fa-check yellow-color"></i> maintain essential hygiene cleaning</p>
							<p class="no-margin pad-bot-10"><i class="fa fa-check yellow-color"></i> maintain essential hygiene cleaning</p>
							<p class="no-margin pad-bot-30"><i class="fa fa-check yellow-color"></i> maintain essential hygiene cleaning</p>
							<a href="" class="pricing-pack-section-btn yellow-bg"> Continue ($312)</a>
							<a href="" class="pricing-pack-section-btn2 pad-top-20 blue-color"> Compare Pakages</a>
					  	</div>					      
					</div>
					<div id="premium" class="container tab-pane">
					  	<div class="pricing-pack-section2">
					   		<h3 class="no-margin blue-color pad-bot-10">Fee Per hour</h3>
							<p class="no-margin">$ 312</p>
							<h3 class="no-margin blue-color pad-top-20 pad-bot-10">Description</h3>
							<p class="no-margin">Hard wood, composit and eco decking done. Onsite inspection and free no obligation quotation provided. Prices starting from $200 per m2</p>
							<h3 class="no-margin blue-color pad-top-20 pad-bot-10"><i class="fa fa-calendar"></i> Delivery</h3>
							<p class="no-margin pad-bot-10"><i class="fa fa-check yellow-color"></i> maintain essential hygiene cleaning</p>
							<p class="no-margin pad-bot-10"><i class="fa fa-check yellow-color"></i> maintain essential hygiene cleaning</p>
							<p class="no-margin pad-bot-30"><i class="fa fa-check yellow-color"></i> maintain essential hygiene cleaning</p>
							<a href="" class="pricing-pack-section-btn yellow-bg"> Continue ($312)</a>
							<a href="" class="pricing-pack-section-btn2 pad-top-20 blue-color"> Compare Pakages</a>
					  	</div>					      
					</div>					    
				</div>					
			</div>
		</div>			
	</div>
</section>

<section>
	<div class="container pad-top-10">
		<div class="row">
			<div class="col-lg-7 col-md-12">
				<div class="pricing-pack-section-3 pad-top-30">
					<h2 class="no-margin blue-color pad-bot-20">About This Maintenance & Cleaning</h2>
					<h3 class="no-margin blue-color pad-bot-10">Please contact me before ordering</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
					<h3 class="no-margin blue-color pad-bot-10">We work on the Latest Maintenance & Cleaning</h3>
					<ul>
						<li>Lorem ipsum dolor</li>
						<li>Lorem ipsum dolor</li>
						<li>Lorem ipsum dolor</li>
						<li>Lorem ipsum dolor</li>
					</ul>
					<h4 class="no-margin blue-color pad-bot-10">When you want this service?</h4>
					<form>
						<div class="form-check-inline pricing-pack-section-3-form">
						  <label class="form-check-label">
						    <input type="radio" class="form-check-input" name="optradio">Available
						  </label>
						</div>
						<div class="form-check-inline pricing-pack-section-3-form">
						  <label class="form-check-label">
						    <input type="radio" class="form-check-input" name="optradio">Not Available
						  </label>
						</div>
						<div class="row pad-top-20">
							<div class="col-md-6">
								<div class="pricing-pack-section-3-form">
									<label>Choose Time:</label>
									<input type="text" class="pricing-pack-section-3-form-input" placeholder="00:00:00" name="">
								</div>
							</div>							
							<div class="col-md-6">
								<div class="pricing-pack-section-3-form">
									<label>Service Hours:</label>
									<input type="text" class="pricing-pack-section-3-form-input" placeholder="Select Hours"  name="">
								</div>
							</div>
							<div class="col-md-12 pad-top-10 pad-bot-10">
								<div class="pricing-pack-section-3-form">
									<label>Select Adress? </label>
									<input type="text" name="" class="pricing-pack-section-3-form-input" placeholder="Type Address">
								</div>
							</div>
							<div class="col-md-6">
								<div class="pricing-pack-section-3-form">
									<label>Special Comment:</label>
									<input type="text" name="" class="pricing-pack-section-3-form-input" placeholder="Type Comment">
								</div>
							</div>
							<div class="col-md-6">
								<div class="pricing-pack-section-3-form">
									<label>Detail Instruction:</label>
									<input type="text" name="" class="pricing-pack-section-3-form-input" placeholder="Type Instruction">
								</div>
							</div>
							<div class="col-md-12">
								<div class="pricing-pack-section-3-form pad-top-20">
									<input type="submit" name="" class="pricing-pack-section-3-form-btn" value="Book Service">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Comparison Table Section Ends Here -->

<section>
	<div class="container section-mobile pad-top-50 pad-bot-60">
		<div class="sec-head pad-bot-30">
			<h4 class="no-margin blue-color">Other Services </h4>
		</div>	
		<div class="services">
			<div class="row">
			 	<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 services-box">
			 		<img alt="product-image" src="{{URL::to('/public/website')}}/images/work-image1.jpg"/>
				 	<div class="services-inner pad-top-30 pad-bot-10 pad-left-20 pad-right-20">				 		
				 		<div class="row">
				 			<div class="col-lg-6 col-md-8 col-6">
				 				<img alt="product-image" src="{{URL::to('/public/website')}}/images/boy.png"/> 
				 				<span class="services-title">Home</span>
				 			</div>
				 			<div class="col-lg-6 col-md-4 col-6">
				 				<span class="services-inner-1 pad-top-10">
				 					<img src="{{URL::to('/public/website')}}/images/heart-icon.png">
				 					<img src="{{URL::to('/public/website')}}/images/calendar-icon2.jpg">
				 				</span>
				 			</div>
				 			<div class="col-lg-6 col-md-5 col-5 pad-top-20">
				 				<span class="rating-section"><i class="fa fa-star star-on"> 5.0 </i> (17)</span>
				 			</div>
				 			<div class="col-lg-6 col-md-7 col-7 pad-top-20">
				 				<h5 class="price-section no-margin"> Starting At $1000 </h5> 
				 			</div>
				 			<div class="col-lg-12 col-md-12 col-12">
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
				 			<div class="col-lg-6 col-md-8 col-6">
				 				<img alt="product-image" src="{{URL::to('/public/website')}}/images/boy.png"/> 
				 				<span class="services-title">Home</span>
				 			</div>
				 			<div class="col-lg-6 col-md-4 col-6">
				 				<span class="services-inner-1 pad-top-10">
				 					<img src="{{URL::to('/public/website')}}/images/heart-icon.png">
				 					<img src="{{URL::to('/public/website')}}/images/calendar-icon2.jpg">
				 				</span>
				 			</div>
				 			<div class="col-lg-6 col-md-5 col-5 pad-top-20">
				 				<span class="rating-section"><i class="fa fa-star star-on"> 5.0 </i> (17)</span>
				 			</div>
				 			<div class="col-lg-6 col-md-7 col-7 pad-top-20">
				 				<h5 class="price-section no-margin"> Starting At $1000 </h5> 
				 			</div>
				 			<div class="col-lg-12 col-md-12 col-12">
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
				 			<div class="col-lg-6 col-md-8 col-6">
				 				<img alt="product-image" src="{{URL::to('/public/website')}}/images/boy.png"/> 
				 				<span class="services-title">Home</span>
				 			</div>
				 			<div class="col-lg-6 col-md-4 col-6">
				 				<span class="services-inner-1 pad-top-10">
				 					<img src="{{URL::to('/public/website')}}/images/heart-icon.png">
				 					<img src="{{URL::to('/public/website')}}/images/calendar-icon2.jpg">
				 				</span>
				 			</div>
				 			<div class="col-lg-6 col-md-5 col-5 pad-top-20">
				 				<span class="rating-section"><i class="fa fa-star star-on"> 5.0 </i> (17)</span>
				 			</div>
				 			<div class="col-lg-6 col-md-7 col-7 pad-top-20">
				 				<h5 class="price-section no-margin"> Starting At $1000 </h5> 
				 			</div>
				 			<div class="col-lg-12 col-md-12 col-12">
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

@endsection