@extends('web.includes.master')
@section('title', 'Comparison Table')
@section('addStyle')

@endsection
@section('content')
<style type="text/css">
	.comparison-sec1 h3
	{
		font-size: 25px;
		font-weight: 600;
	}
	.pricing-pack-section1 h2 {
    font-size: 34px;
    font-weight: 600;
}
.pricing-pack-section1 h4 {
    font-size: 20px;
    padding-right: 5px;
}
.pricing-pack-section2 h3 {
    font-weight: 600;
    font-size: 15px;
}
.pricing-pack-section2 p {
    font-size: 14px;
}
.tab-content {
    border: 1px solid #b8b8b8;
}
a.nav-link {
    border: 1px solid #b8b8b8 !important;
    border-bottom: 3px solid #b8b8b8 !important;
}
a.nav-link.active {
    border-bottom: 3px solid #f4b423 !important;
}
.nav-tabs li a {
    font-size: 20px;
    font-weight: 600;
}
.nav-tabs li a {
    padding: 10px 34px;
}

.pricing-pack-section-btn {
    font-size: 16px;
    font-weight: 600;
}
.pricing-pack-section-btn {
    font-size: 16px;
    font-weight: 600;
    padding: 10px 20px;
    border-radius: 25px;
    text-align: center;
    margin: 0 auto;
    display: block;
    width: 90%;
    color: white;
}
.pricing-pack-section-btn:hover	{
	color: #186780;
}
.pricing-pack-section-btn2 {
	font-size: 16px;
    text-align: center;
    width: 100%;
    font-weight: 600;
}
</style>

<!-- Comparison Table Section Starts Here -->
<section class="comparison-sec">
	<div class="comparison-sec1 yellow-bg pad-top-20 pad-bot-20">
		<h3 class="blue-color no-margin text-center">Home Maintenance</h3>
	</div>

	<div class="container pad-top-50">
		<div class="row">
			<div class="col-md-7">
				<div class="pricing-pack-section1">
					<h2 class="no-margin blue-color">Home Maintenance & Cleaning</h2>
					<div class="row pad-top-10">
						<div class="col-md-2">
							<img alt="product-image" src="{{URL::to('/public/website')}}/images/boy.png"/> 
						</div>
						<div class="col-md-4 no-pad" style="border-right: 1px solid #636363;">
							<h4 class="no-margin pad-top-10">Top Rated Saller</h4>
						</div>
						<div class="col-md-4 pad-top-10">
							<span class="rating-section "><i class="fa fa-star star-on"> 5.0 </i> (17)</span>
						</div>
						<div class="col-md-12 pad-top-10">
							<img alt="product-image" src="{{URL::to('/public/website')}}/images/work-image1.jpg" width="100%" />
						</div>										
					</div>
				</div>				
			</div>
			<div class="col-md-5">
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

				<div class="tab-content pad-top-30 pad-bot-30 pad-left-10 pad-right-10">
					<div id="basic" class="container tab-pane active">
					  	<div class="pricing-pack-section2">
					   		<h3 class="no-margin blue-color pad-bot-10">Fee Per hour</h3>
							<p class="no-margin">$ 312</p>
							<h3 class="no-margin blue-color pad-top-20 pad-bot-10">Description</h3>
							<p class="no-margin">Hard wood, composit and eco decking done. Onsite inspection and free no obligation quotation provided. Prices starting from $200 per m2</p>
							<h3 class="no-margin blue-color pad-top-30 pad-bot-10"><i class="fa fa-calendar"></i> Delivery</h3>
							<p class="no-margin pad-bot-10"><i class="fa fa-check yellow-color"></i> maintain essential hygiene cleaning</p>
							<p class="no-margin pad-bot-10"><i class="fa fa-check yellow-color"></i> maintain essential hygiene cleaning</p>
							<p class="no-margin pad-bot-40"><i class="fa fa-check yellow-color"></i> maintain essential hygiene cleaning</p>
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
							<h3 class="no-margin blue-color pad-top-30 pad-bot-10"><i class="fa fa-calendar"></i> Delivery</h3>
							<p class="no-margin pad-bot-10"><i class="fa fa-check yellow-color"></i> maintain essential hygiene cleaning</p>
							<p class="no-margin pad-bot-10"><i class="fa fa-check yellow-color"></i> maintain essential hygiene cleaning</p>
							<p class="no-margin pad-bot-40"><i class="fa fa-check yellow-color"></i> maintain essential hygiene cleaning</p>
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
							<h3 class="no-margin blue-color pad-top-30 pad-bot-10"><i class="fa fa-calendar"></i> Delivery</h3>
							<p class="no-margin pad-bot-10"><i class="fa fa-check yellow-color"></i> maintain essential hygiene cleaning</p>
							<p class="no-margin pad-bot-10"><i class="fa fa-check yellow-color"></i> maintain essential hygiene cleaning</p>
							<p class="no-margin pad-bot-40"><i class="fa fa-check yellow-color"></i> maintain essential hygiene cleaning</p>
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
	<div class="container pad-top-50">
		<div class="row">
			<div class="col-md-7">
				<div class="pricing-pack-section-3">
					<h2>About This Maintenance & Cleaning</h2>
					<h3>Please contact me before ordering</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- Comparison Table Section Ends Here -->


<section>
	<div class="container pad-top-120 pad-bot-100">
		<div class="sec-head pad-bot-30">
			<h4 class="no-margin blue-color">Other Services </h4>
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
				 			<div class="col-md-6 pad-top-20">
				 				<span class="rating-section"><i class="fa fa-star star-on"> 5.0 </i> (17)</span>
				 			</div>
				 			<div class="col-md-6 pad-top-20">
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
				 			<div class="col-md-6 pad-top-20">
				 				<span class="rating-section"><i class="fa fa-star star-on"> 5.0 </i> (17)</span>
				 			</div>
				 			<div class="col-md-6 pad-top-20">
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
				 			<div class="col-md-6 pad-top-20">
				 				<span class="rating-section"><i class="fa fa-star star-on"> 5.0 </i> (17)</span>
				 			</div>
				 			<div class="col-md-6 pad-top-20">
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



@endsection