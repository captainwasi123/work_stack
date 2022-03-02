@extends('user.includes.master2')
@section('title', 'Smiles')
@section('addStyle')

@endsection
@section('content')

<!-- Comparison Table Section Starts Here -->
<section class="comparison-sec">
	<div class="comparison-sec1 yellow-bg pad-top-20 pad-bot-20">
		<h3 class="blue-color no-margin text-center"> My Smiles </h3>
	</div>

	<div class="container pad-top-50 pad-bot-50">
		<div class="row">
			<div class="col-md-12 col-lg-12 col-sm-4 col-xs-12">		
				<div class="smile-section">
					<div class="points-head pad-bot-50">
 						<h3 class="no-margin"> <b class="yellow-color pad-right-10"> 270 </b> Total Points </h3>
 						<p class="no-margin pad-top-20"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
 					</div>
				 	<div class="row">
					 	<div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
						 	<div class="points-box m-b-20">
							 	<img alt="smiley-image" src="{{URL::to('/public/website')}}/images/smiley2.jpg"/>
							 	<h4 class="no-margin pad-top-20"> 10 Points </h4>
							 	<h6 class="no-margin pad-bot-10 yellow-color"> $66.70 </h6>
							 	<p class="no-margin pad-top-10"> For successfully sold brown Sofa </p>
						 	</div>
					 	</div>
					 	<div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
						 	<div class="points-box m-b-20">
							 	<img alt="smiley-image" src="{{URL::to('/public/website')}}/images/smiley2.jpg"/>
							 	<h4 class="no-margin pad-top-20"> 10 Points </h4>
							 	<h6 class="no-margin pad-bot-10 yellow-color"> $66.70 </h6>
							 	<p class="no-margin pad-top-10"> For successfully sold brown Sofa </p>
						 	</div>
					 	</div>
					 	<div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
						 	<div class="points-box m-b-20">
							 	<img alt="smiley-image" src="{{URL::to('/public/website')}}/images/smiley2.jpg"/>
							 	<h4 class="no-margin pad-top-20"> 10 Points </h4>
							 	<h6 class="no-margin pad-bot-10 yellow-color"> $66.70 </h6>
							 	<p class="no-margin pad-top-10"> For successfully sold brown Sofa </p>
						 	</div>
					 	</div>
					 	<div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
						 	<div class="points-box m-b-20">
							 	<img alt="smiley-image" src="{{URL::to('/public/website')}}/images/smiley2.jpg"/>
							 	<h4 class="no-margin pad-top-20"> 10 Points </h4>
							 	<h6 class="no-margin pad-bot-10 yellow-color"> $66.70 </h6>
							 	<p class="no-margin pad-top-10"> For successfully sold brown Sofa </p>
						 	</div>
					 	</div>
					 	<div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
						 	<div class="points-box">
						 		<div class="points-off">
						 			<h5 class="no-margin"> Available On <b class="yellow-color pad-top-10 pad-bot-10"> Nov 22, 2020 </b> at 11:00 am </h5>	
						 		</div>
						 		<img alt="smiley-image" src="{{URL::to('/public/website')}}/images/smiley2.jpg"/>
						 		<h4 class="no-margin pad-top-20"> 15 Points </h4>
						 		<h6 class="no-margin pad-bot-10 yellow-color"> $56.70 </h6>
						 		<p class="no-margin pad-top-10"> For second transaction in a week </p>
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