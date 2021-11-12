@extends('web.includes.master')
@section('title', 'Home')
@section('addStyle')
<style type="text/css">
/*@media screen and (max-width: 519px) and (min-width: 320px) {
	.shipping-address-head p:nth-child(2) {
    float: left !important;
    margin-top: 12px !important;
    margin-bottom: 10px !important;
}

.shipping-address-head p:nth-child(2) a {
    margin: 0px 15px 0px 0px;
}
}*/
</style>
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
							<div class="col-lg-10 no-pad pad-mob-left-10">
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
	<div class="container section-mobile pad-top-120">
		<div class="sec-head pad-top-10 pad-bot-50">
			<h4 class="no-margin blue-color"> What do you need done? </h4>
		</div>
		<div class="seller-grid arrow-style2">
			<div class="seller-box2">
				<div>
					<img alt="product-image" src="{{URL::to('/public/website')}}/images/need1.png"/>
					<h4 class="no-margin pad-top-10 blue-color"> Lorem ipsum dolor</h4>
					<h5 class="no-margin blue-color"> Books </h5>
				</div>
			</div>
			<div class="seller-box2">
				<div>
					<img alt="product-image" src="{{URL::to('/public/website')}}/images/need2.png"/>
					<h4 class="no-margin pad-top-10 blue-color"> Lorem ipsum dolor</h4>
					<h5 class="no-margin blue-color"> Books </h5>
				</div>
			</div>
			<div class="seller-box2">
				<div>
					<img alt="product-image" src="{{URL::to('/public/website')}}/images/need3.png"/>
					<h4 class="no-margin pad-top-10 blue-color"> Lorem ipsum dolor</h4>
					<h5 class="no-margin blue-color"> Books </h5>
				</div>
			</div>
			<div class="seller-box2">
				<div>
					<img alt="product-image" src="{{URL::to('/public/website')}}/images/need4.png"/>
					<h4 class="no-margin pad-top-10 blue-color"> Lorem ipsum dolor</h4>
					<h5 class="no-margin blue-color"> Books </h5>
				</div>
			</div>
			<div class="seller-box2">
				<div>
					<img alt="product-image" src="{{URL::to('/public/website')}}/images/need5.png"/>
					<h4 class="no-margin pad-top-10 blue-color"> Lorem ipsum dolor</h4>
					<h5 class="no-margin blue-color"> Books </h5>
				</div>
			</div>
			<div class="seller-box2">
				<div>
					<img alt="product-image" src="{{URL::to('/public/website')}}/images/need5.png"/>
					<h4 class="no-margin pad-top-10 blue-color"> Lorem ipsum dolor</h4>
					<h5 class="no-margin blue-color"> Books </h5>
				</div>
			</div>			
		</div>
	</div>
</section>

<section>
	<div class="container section-mobile pad-top-120">
		<div class="sec-head pad-bot-30">
			<h4 class="no-margin blue-color"> Near by Services </h4>
		</div>	
		<div class="seller-grid1 arrow-style2">
			<div class="seller-box">
				<div>
					<img alt="product-image" src="{{URL::to('/public/website')}}/images/service1.png"/>
					<div class="inner-div pad-bot-10">
						<p class="no-pad ">I will design your next amazing product line and packaging</p>				
						<i class="fa fa-star star-on"> 5.0 </i> (17)
						<hr>
						<span class="nic">
							<i class="fa fa-heart"> </i>
							<p class="no-margin" style="float: right;">Starting At $1000</p>
						</span>
					</div>	
				</div>
			</div>
			<div class="seller-box">
				<div>
					<img alt="product-image" src="{{URL::to('/public/website')}}/images/service2.png"/>
					<div class="inner-div pad-bot-10">
						<p class="no-pad ">I will design your next amazing product line and packaging</p>				
						<i class="fa fa-star star-on"> 5.0 </i> (17)
						<hr>
						<span class="nic">
							<i class="fa fa-heart"> </i>
							<p class="no-margin" style="float: right;">Starting At $1000</p>
						</span>
					</div>	
				</div>
			</div>
			<div class="seller-box">
				<div>
					<img alt="product-image" src="{{URL::to('/public/website')}}/images/service3.png"/>
					<div class="inner-div pad-bot-10">
						<p class="no-pad ">I will design your next amazing product line and packaging</p>				
						<i class="fa fa-star star-on"> 5.0 </i> (17)
						<hr>
						<span class="nic">
							<i class="fa fa-heart"> </i>
							<p class="no-margin" style="float: right;">Starting At $1000</p>
						</span>
					</div>	
				</div>
			</div>
			<div class="seller-box">
				<div>
					<img alt="product-image" src="{{URL::to('/public/website')}}/images/service4.png"/>
					<div class="inner-div pad-bot-10">
						<p class="no-pad ">I will design your next amazing product line and packaging</p>				
						<i class="fa fa-star star-on"> 5.0 </i> (17)
						<hr>
						<span class="nic">
							<i class="fa fa-heart"> </i>
							<p class="no-margin" style="float: right;">Starting At $1000</p>
						</span>
					</div>	
				</div>
			</div>
			<div class="seller-box">
				<div>
					<img alt="product-image" src="{{URL::to('/public/website')}}/images/service2.png"/>
					<div class="inner-div pad-bot-10">
						<p class="no-pad ">I will design your next amazing product line and packaging</p>				
						<i class="fa fa-star star-on"> 5.0 </i> (17)
						<hr>
						<span class="nic">
							<i class="fa fa-heart"> </i>
							<p class="no-margin" style="float: right;">Starting At $1000</p>
						</span>
					</div>	
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container section-mobile pad-top-120">
		<div class="sec-head pad-bot-30">
			<h4 class="no-margin blue-color"> Customer Looking for </h4>
		</div>
		<div class="how-works-data pad-bot-100">
			<div class="row">
				<div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 pad-bot-20">				
					<img alt="work-image" src="{{URL::to('/public/website')}}/images/customer1.png"/>
					<div class="customer-sec">
						<h3 class="no-margin pad-top-10 pad-bot-10">Lorem ipsum dolor sit amet</h3>
						<p class="no-margin"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
					</div>
				</div>
				<div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 pad-bot-20">				
					<img alt="work-image" src="{{URL::to('/public/website')}}/images/customer2.png"/>
					<div class="customer-sec">
						<h3 class="no-margin pad-top-10 pad-bot-10">Lorem ipsum dolor sit amet</h3>
						<p class="no-margin"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
					</div>
				</div>
				<div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 pad-bot-20">				
					<img alt="work-image" src="{{URL::to('/public/website')}}/images/customer3.png"/>
					<div class="customer-sec">
						<h3 class="no-margin pad-top-10 pad-bot-10">Lorem ipsum dolor sit amet</h3>
						<p class="no-margin"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="section-2 pad-top-50 pad-bot-50">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-8 col-sm-4 col-xs-12">	
					<div class="section-2-data pad-top-30 pad-bot-30">
						<h4 class="no-margin pad-bot-20 blue-color"> Customers Looking for the Best</h4>
						<p class="no-margin"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet consectetur adipiscing elit </p>
						<button type="button" class="btn section-2-btn m-t-20">SIGN IN</button>
					</div>
				</div>
				<div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">				
					<img alt="work-image" src="{{URL::to('/public/website')}}/images/banner1.png"/>
				</div>				
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container section-mobile pad-top-120 pad-bot-80">
		<div class="sec-head pad-bot-50">
			<h4 class="no-margin blue-color"> Explore the marketplace  </h4>
		</div>	
			<div class="row">
				<div class="col-md-4 col-lg-2 col-sm-6 col-6 pad-bot-20">
					<div class="marketplace-sec">
						<img alt="work-image" src="{{URL::to('/public/website')}}/images/marketplace1.png"/>
						<h3 class="no-margin pad-top-10">Home Cooked Food</h3>
					</div>
				</div>
				<div class="col-md-4 col-lg-2 col-sm-6 col-6 pad-bot-20">
					<div class="marketplace-sec">
						<img alt="work-image" src="{{URL::to('/public/website')}}/images/marketplace1.png"/>
						<h3 class="no-margin pad-top-10">Home Cooked Food</h3>
					</div>
				</div>
				<div class="col-md-4 col-lg-2 col-sm-6 col-6 pad-bot-20">
					<div class="marketplace-sec">
						<img alt="work-image" src="{{URL::to('/public/website')}}/images/marketplace1.png"/>
						<h3 class="no-margin pad-top-10">Home Cooked Food</h3>
					</div>
				</div>
				<div class="col-md-4 col-lg-2 col-sm-6 col-6 pad-bot-20">
					<div class="marketplace-sec">
						<img alt="work-image" src="{{URL::to('/public/website')}}/images/marketplace1.png"/>
						<h3 class="no-margin pad-top-10">Home Cooked Food</h3>
					</div>
				</div>
				<div class="col-md-4 col-lg-2 col-sm-6 col-6 pad-bot-20">
					<div class="marketplace-sec">
						<img alt="work-image" src="{{URL::to('/public/website')}}/images/marketplace1.png"/>
						<h3 class="no-margin pad-top-10">Home Cooked Food</h3>
					</div>
				</div>
				<div class="col-md-4 col-lg-2 col-sm-6 col-6 pad-bot-20">
					<div class="marketplace-sec">
						<img alt="work-image" src="{{URL::to('/public/website')}}/images/marketplace1.png"/>
						<h3 class="no-margin pad-top-10">Home Cooked Food</h3>
					</div>
				</div>
				<div class="col-md-4 col-lg-2 col-sm-6 col-6 pad-bot-20">
					<div class="marketplace-sec">
						<img alt="work-image" src="{{URL::to('/public/website')}}/images/marketplace1.png"/>
						<h3 class="no-margin pad-top-10">Home Cooked Food</h3>
					</div>
				</div>
				<div class="col-md-4 col-lg-2 col-sm-6 col-6 pad-bot-20">
					<div class="marketplace-sec">
						<img alt="work-image" src="{{URL::to('/public/website')}}/images/marketplace1.png"/>
						<h3 class="no-margin pad-top-10">Home Cooked Food</h3>
					</div>
				</div>
				<div class="col-md-4 col-lg-2 col-sm-6 col-6 pad-bot-20">
					<div class="marketplace-sec">
						<img alt="work-image" src="{{URL::to('/public/website')}}/images/marketplace1.png"/>
						<h3 class="no-margin pad-top-10">Home Cooked Food</h3>
					</div>
				</div>
				<div class="col-md-4 col-lg-2 col-sm-6 col-6 pad-bot-20">
					<div class="marketplace-sec">
						<img alt="work-image" src="{{URL::to('/public/website')}}/images/marketplace1.png"/>
						<h3 class="no-margin pad-top-10">Home Cooked Food</h3>
					</div>
				</div>
				<div class="col-md-4 col-lg-2 col-sm-6 col-6 pad-bot-20">
					<div class="marketplace-sec">
						<img alt="work-image" src="{{URL::to('/public/website')}}/images/marketplace1.png"/>
						<h3 class="no-margin pad-top-10">Home Cooked Food</h3>
					</div>
				</div>
				<div class="col-md-4 col-lg-2 col-sm-6 col-6 pad-bot-20">
					<div class="marketplace-sec">
						<img alt="work-image" src="{{URL::to('/public/website')}}/images/marketplace1.png"/>
						<h3 class="no-margin pad-top-10">Home Cooked Food</h3>
					</div>
				</div>
			</div>	
		</div>
</section>

@endsection