@extends('user.includes.master')
@section('title', 'My Favorites')
@section('addStyle')

@endsection
@section('content')

<!-- Comparison Table Section Starts Here -->
<section class="comparison-sec">
	<div class="comparison-sec1 yellow-bg pad-top-20 pad-bot-20">
		<h3 class="blue-color no-margin text-center"> Favorites </h3>
	</div>

	<div class="container pad-top-50 pad-bot-50">
		<div class="row">
			<div class="col-md-4 col-lg-3 col-sm-4 col-xs-12 pad-bot-50">
				<div class="account-handlers">
					<ul>
						<li class="active"> <a href=""> <i class="fa fa-folder"> </i> My Disputes </a> </li>
						<li> <a href=""> <i class="fa fa-user"> </i> Update Personal Details </a> </li>
						<li> <a href=""> <i class="fa fa-key"> </i> Reset Password </a> </li>
						<li> <a href=""> <i class="fa fa-credit-card"> </i> My Transactions </a> </li>
						<li> <a href=""> <i class="fa fa-star"> </i> My Favorites </a> </li>
					</ul>
				</div>
			</div>
			<div class="col-md-8 col-lg-9 col-sm-8 col-xs-12">
				<div class="account-over pad-right-20"> 	
				 	<div class="row">
					 	<div class="col-md-6 col-lg-4 col-sm-6 col-xs-12">
						 	<div class="fav-box">
							 	<img alt="product-image" src="{{URL::to('/public/website')}}/images/work-image1.jpg"/>
							 	<div class="fav-head pad-left-10 pad-right-10 pad-top-10 pad-bot-20">
								 	<h4 class="no-margin"> Maths Tution <span> <i class="fa fa-heart" style="color: red;"> </i> <b> 4.8 </b> </span> </h4>
								 	<h5 class="no-margin pad-top-10 pad-bot-10"> R.K Rydon & Complex 
								 		<span> 
								 			<i class="fa fa-star star-on"> </i>
								 			<i class="fa fa-star star-on"> </i>
								 			<i class="fa fa-star star-on"> </i>
								 			<i class="fa fa-star"> </i>
								 			<i class="fa fa-star"> </i> 
								 		</span> 
								 	</h5>
								 	<ul class="pad-top-20">
								 		<li> <i class="fa fa-check"> </i> lorem ipsum is simply dummy  </li>
								 		<li> <i class="fa fa-check"> </i> lorem ipsum is simply dummy </li>
								 		<li> <i class="fa fa-check"> </i> lorem ipsum is simply dummy  </li>
								 	</ul>
								 	<div class="text-center">
								 		<a href="#" class="form-field5-btn yellow-bg"> BOOK SERVICE </a>
								 	</div>
							 	</div>
						 	</div>
					 	</div>
					 	<div class="col-md-6 col-lg-4 col-sm-6 col-xs-12">
						 	<div class="fav-box">
							 	<img alt="product-image" src="{{URL::to('/public/website')}}/images/work-image1.jpg"/>
							 	<div class="fav-head pad-left-10 pad-right-10 pad-top-10 pad-bot-20">
								 	<h4 class="no-margin"> Maths Tution <span> <i class="fa fa-heart" style="color: red;"> </i> <b> 4.8 </b> </span> </h4>
								 	<h5 class="no-margin pad-top-10 pad-bot-10"> R.K Rydon & Complex 
								 		<span> 
								 			<i class="fa fa-star star-on"> </i>
								 			<i class="fa fa-star star-on"> </i>
								 			<i class="fa fa-star star-on"> </i>
								 			<i class="fa fa-star"> </i>
								 			<i class="fa fa-star"> </i> 
								 		</span> 
								 	</h5>
								 	<ul class="pad-top-20">
								 		<li> <i class="fa fa-check"> </i> lorem ipsum is simply dummy  </li>
								 		<li> <i class="fa fa-check"> </i> lorem ipsum is simply dummy </li>
								 		<li> <i class="fa fa-check"> </i> lorem ipsum is simply dummy  </li>
								 	</ul>
								 	<div class="text-center">
								 		<a href="#" class="form-field5-btn yellow-bg"> BOOK SERVICE </a>
								 	</div>
							 	</div>
						 	</div>
					 	</div>
					 	<div class="col-md-6 col-lg-4 col-sm-6 col-xs-12">
						 	<div class="fav-box">
							 	<img alt="product-image" src="{{URL::to('/public/website')}}/images/work-image1.jpg"/>
							 	<div class="fav-head pad-left-10 pad-right-10 pad-top-10 pad-bot-20">
								 	<h4 class="no-margin"> Maths Tution <span> <i class="fa fa-heart" style="color: red;"> </i> <b> 4.8 </b> </span> </h4>
								 	<h5 class="no-margin pad-top-10 pad-bot-10"> R.K Rydon & Complex 
								 		<span> 
								 			<i class="fa fa-star star-on"> </i>
								 			<i class="fa fa-star star-on"> </i>
								 			<i class="fa fa-star star-on"> </i>
								 			<i class="fa fa-star"> </i>
								 			<i class="fa fa-star"> </i> 
								 		</span> 
								 	</h5>
								 	<ul class="pad-top-20">
								 		<li> <i class="fa fa-check"> </i> lorem ipsum is simply dummy  </li>
								 		<li> <i class="fa fa-check"> </i> lorem ipsum is simply dummy </li>
								 		<li> <i class="fa fa-check"> </i> lorem ipsum is simply dummy  </li>
								 	</ul>
								 	<div class="text-center">
								 		<a href="#" class="form-field5-btn yellow-bg"> BOOK SERVICE </a>
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