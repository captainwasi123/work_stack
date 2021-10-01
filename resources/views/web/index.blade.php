@extends('web.includes.master')
@section('title', 'Home')
@section('addStyle')
<style type="text/css">
	  @media screen and (max-width: 519px) and (min-width: 320px) {
	.shipping-address-head p:nth-child(2) {
    float: left !important;
    margin-top: 12px !important;
    margin-bottom: 10px !important;
}

.shipping-address-head p:nth-child(2) a {
    margin: 0px 15px 0px 0px;
}
}
</style>
@endsection
@section('content')


<!-- Banner Section Starts Here -->
<section class="banner-sec">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="banner-form">
			<h3>The Best Explore your Neighbourhood.</h3>
				<form>
					<div class="form-search1">
					<input type="text" placeholder="Search Your Product / Service" name="search-field">
					</div>
					<div class="form-search2">		
					<input type="submit" name="submit">
					</div>
				</form>
				<div class="search-cata">
					<h4>Popular: </h4>	
					<button>Books</button>	
					<button>Tutor</button>
					<button>Grocery</button>
					<button>Grocery</button>	
					<button>Beautician</button>	
				</div>
		</div>
			</div>
			<div class="col-md-4">
				<img alt="product-image" src="{{URL::to('/public/website')}}/images/header-banner.png"/>
			</div>
		</div>
	</div>
</section>

<section class="section1">
	<div class="container">
		<div class="sec-head">
		<h4> What do you need done? </h4>
		</div>
		<div class="seller-grid arrow-style2">
			<div class="seller-box2">
				<div>
					<img alt="product-image" src="{{URL::to('/public/website')}}/images/need1.png"/>
					<h4> Lorem ipsum dolor</h4>
					<h5> Books  </h5>
				</div>
			</div>
			<div class="seller-box2">
				<div>
					<img alt="product-image" src="{{URL::to('/public/website')}}/images/need2.png"/>
					<h4> Lorem ipsum dolor</h4>
					<h5> Books  </h5>
				</div>
			</div>
			<div class="seller-box2">
				<div>
					<img alt="product-image" src="{{URL::to('/public/website')}}/images/need3.png"/>
					<h4> Lorem ipsum dolor</h4>
					<h5> Books  </h5>
				</div>
			</div>
			<div class="seller-box2">
				<div>
					<img alt="product-image" src="{{URL::to('/public/website')}}/images/need4.png"/>
					<h4> Lorem ipsum dolor</h4>
					<h5> Books  </h5>
				</div>
			</div>
			<div class="seller-box2">
				<div>
					<img alt="product-image" src="{{URL::to('/public/website')}}/images/need5.png"/>
					<h4> Lorem ipsum dolor</h4>
					<h5> Books  </h5>
				</div>
			</div>
			<div class="seller-box2">
				<div>
					<img alt="product-image" src="{{URL::to('/public/website')}}/images/need5.png"/>
					<h4> Lorem ipsum dolor</h4>
					<h5> Books  </h5>
				</div>
			</div>			
		</div>
	</div>
</section>

<section class="section2">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
				<div class="sec-head">
					<h4> Near by Services </h4>
				</div>	
			</div>
		</div>	
		<div class="seller-grid1 arrow-style2">
			<div class="seller-box">
				<div>
					<img alt="product-image" src="{{URL::to('/public/website')}}/images/service1.png"/>
					<div class="inner-div">
						<p>I will design your next amazing product line and packaging</p>				
						<i class="fa fa-star star-on"> 5.0 </i> (17)
						<hr>
						<span class="nic">
							<i class="fa fa-heart"> </i>
							<p style="float: right;">Starting At $1000</p>
						</span>
					</div>	
				</div>
			</div>
			<div class="seller-box">
				<div>
					<img alt="product-image" src="{{URL::to('/public/website')}}/images/service2.png"/>
					<div class="inner-div">
						<p>I will design your next amazing product line and packaging</p>				
						<i class="fa fa-star star-on"> 5.0 </i> (17)
						<hr>
						<span class="nic">
							<i class="fa fa-heart"> </i>
							<p style="float: right;">Starting At $1000</p>
						</span>
					</div>	
				</div>
			</div>
			<div class="seller-box">
				<div>
					<img alt="product-image" src="{{URL::to('/public/website')}}/images/service3.png"/>
					<div class="inner-div">
						<p>I will design your next amazing product line and packaging</p>				
						<i class="fa fa-star star-on"> 5.0 </i> (17)
						<hr>
						<span class="nic">
							<i class="fa fa-heart"> </i>
							<p style="float: right;">Starting At $1000</p>
						</span>
					</div>	
				</div>
			</div>
			<div class="seller-box">
				<div>
					<img alt="product-image" src="{{URL::to('/public/website')}}/images/service4.png"/>
					<div class="inner-div">
						<p>I will design your next amazing product line and packaging</p>				
						<i class="fa fa-star star-on"> 5.0 </i> (17)
						<hr>
						<span class="nic">
							<i class="fa fa-heart"> </i>
							<p style="float: right;">Starting At $1000</p>
						</span>
					</div>	
				</div>
			</div>
			<div class="seller-box">
				<div>
					<img alt="product-image" src="{{URL::to('/public/website')}}/images/service3.png"/>
					<div class="inner-div">
						<p>I will design your next amazing product line and packaging</p>				
						<i class="fa fa-star star-on"> 5.0 </i> (17)
						<hr>
						<span class="nic">
							<i class="fa fa-heart"> </i>
							<p style="float: right;">Starting At $1000</p>
						</span>
					</div>	
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section3">
	<div class="container">
		<div class="sec-head">
			<h4> Customers Looking for </h4>
		</div>	
		<div class="how-works-data">
			<div class="row">
				<div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">				
					<img alt="work-image" src="{{URL::to('/public/website')}}/images/customer1.png"/>
					<div class="customer-sec">
						<h3>Lorem ipsum dolor sit amet</h3>
						<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
					</div>
				</div>
				<div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">				
					<img alt="work-image" src="{{URL::to('/public/website')}}/images/customer2.png"/>
					<div class="customer-sec">
						<h3>Lorem ipsum dolor sit amet</h3>
						<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
					</div>
				</div>
				<div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">				
					<img alt="work-image" src="{{URL::to('/public/website')}}/images/customer3.png"/>
					<div class="customer-sec">
						<h3>Lorem ipsum dolor sit amet</h3>
						<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="pad1 section-2">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-lg-8 col-sm-4 col-xs-12">	
				<div class="section-2-data">
					<h4> Customers Looking for </h4>
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
					 <button type="button" class="btn btn-primary">SIGN IN</button>
				</div>
			</div>
			<div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">				
				<img alt="work-image" src="{{URL::to('/public/website')}}/images/banner1.png"/>
			</div>				
		</div>
	</div>
</section>

<section class="section4">
	<div class="container">
		<div class="sec-head">
			<h4> Explore the marketplace </h4>
		</div>	
		<div class="how-works-data">
			<div class="row">
				<div class="col-md-6 col-lg-2 col-sm-6 col-xs-6">
					<div class="marketplace-sec">
						<img alt="work-image" src="{{URL::to('/public/website')}}/images/marketplace1.png"/>
						<h3>Home Cooked Food</h3>
					</div>
				</div>
				<div class="col-md-6 col-lg-2 col-sm-6 col-xs-6">
					<div class="marketplace-sec">
						<img alt="work-image" src="{{URL::to('/public/website')}}/images/marketplace1.png"/>
						<h3>Home Cooked Food</h3>
					</div>
				</div>
				<div class="col-md-6 col-lg-2 col-sm-6 col-xs-6">
					<div class="marketplace-sec">
						<img alt="work-image" src="{{URL::to('/public/website')}}/images/marketplace1.png"/>
						<h3>Home Cooked Food</h3>
					</div>
				</div>
				<div class="col-md-6 col-lg-2 col-sm-6 col-xs-6">
					<div class="marketplace-sec">
						<img alt="work-image" src="{{URL::to('/public/website')}}/images/marketplace1.png"/>
						<h3>Home Cooked Food</h3>
					</div>
				</div>
				<div class="col-md-6 col-lg-2 col-sm-6 col-xs-6">
					<div class="marketplace-sec">
						<img alt="work-image" src="{{URL::to('/public/website')}}/images/marketplace1.png"/>
						<h3>Home Cooked Food</h3>
					</div>
				</div>
				<div class="col-md-6 col-lg-2 col-sm-6 col-xs-6">
					<div class="marketplace-sec">
						<img alt="work-image" src="{{URL::to('/public/website')}}/images/marketplace1.png"/>
						<h3>Home Cooked Food</h3>
					</div>
				</div>
			</div>
		</br></br>
			<div class="row">
				<div class="col-md-6 col-lg-2 col-sm-6 col-xs-6">
					<div class="marketplace-sec">
						<img alt="work-image" src="{{URL::to('/public/website')}}/images/marketplace1.png"/>
						<h3>Home Cooked Food</h3>
					</div>
				</div>
				<div class="col-md-6 col-lg-2 col-sm-6 col-xs-6">
					<div class="marketplace-sec">
						<img alt="work-image" src="{{URL::to('/public/website')}}/images/marketplace1.png"/>
						<h3>Home Cooked Food</h3>
					</div>
				</div>
				<div class="col-md-6 col-lg-2 col-sm-6 col-xs-6">
					<div class="marketplace-sec">
						<img alt="work-image" src="{{URL::to('/public/website')}}/images/marketplace1.png"/>
						<h3>Home Cooked Food</h3>
					</div>
				</div>
				<div class="col-md-6 col-lg-2 col-sm-6 col-xs-6">
					<div class="marketplace-sec">
						<img alt="work-image" src="{{URL::to('/public/website')}}/images/marketplace1.png"/>
						<h3>Home Cooked Food</h3>
					</div>
				</div>
				<div class="col-md-6 col-lg-2 col-sm-6 col-xs-6">
					<div class="marketplace-sec">
						<img alt="work-image" src="{{URL::to('/public/website')}}/images/marketplace1.png"/>
						<h3>Home Cooked Food</h3>
					</div>
				</div>
				<div class="col-md-6 col-lg-2 col-sm-6 col-xs-6">
					<div class="marketplace-sec">
						<img alt="work-image" src="{{URL::to('/public/website')}}/images/marketplace1.png"/>
						<h3>Home Cooked Food</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection