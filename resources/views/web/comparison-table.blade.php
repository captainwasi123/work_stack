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
</style>

<!-- Comparison Table Section Starts Here -->
<section class="comparison-sec">
	<div class="comparison-sec1 yellow-bg pad-top-20 pad-bot-20">
		<h3 class="blue-color no-margin text-center"> Comparison Table </h3>
	</div>

	<div class="container pad-top-50">
		<div class="compare-table">
			<table>
				<tbody>
					<tr>
						<td class="no-visib"> <img alt="service-image" src="{{URL::to('/public/website')}}/images/work-image1.jpg"/>  </td>
						<td> <img  alt="service-image" src="{{URL::to('/public/website')}}/images/work-image1.jpg"/> </td>
						<td> <img  alt="service-image" src="{{URL::to('/public/website')}}/images/work-image1.jpg"/> </td>
						<td> <img alt="service-image"  src="{{URL::to('/public/website')}}/images/work-image1.jpg"/> </td>
					</tr>
					<tr>
						<th> Title </th>
						<td> <b> Home Maintenance </b> </td>
						<td> <b> Home Maintenance </b> </td>
						<td> <b> Home Maintenance </b> </td>
					</tr>
					<tr>
						<th> Speciality </th>
						<td> Home CLeaning, Dusting, Grooming </td>
						<td> Home CLeaning, Dusting, Grooming </td>
						<td> Home CLeaning, Dusting, Grooming </td>
					</tr>
					<tr>
						<th> Radius </th>
						<td> 4.6 km </td>
						<td> 4.6 km </td>
						<td> 4.6 km </td>
					</tr>
					<tr>
						<th> Price Range </th>
						<td> from <span class="yellow-color"> <b> $374.99 </b> </span> </td>
						<td> from <span class="yellow-color"> <b> $374.99 </b> </span> </td>
						<td> from <span class="yellow-color"> <b> $374.99 </b> </span> </td>
					</tr>
					<tr>
						<th> Rating </th>
						<td>
							<span class="stars">
							<i class="fa fa-star yellow-color"></i>
							<i class="fa fa-star yellow-color"></i> 
							<i class="fa fa-star yellow-color"></i> 
							<i class="fa fa-star"></i> 
							<i class="fa fa-star "></i> 
							<b> 3.8 </b>  
							</span>  
						</td>
						<td>
							<span class="stars">
							<i class="fa fa-star yellow-color"></i>
							<i class="fa fa-star yellow-color"></i> 
							<i class="fa fa-star yellow-color"></i> 
							<i class="fa fa-star yellow-color"></i> 
							<i class="fa fa-star yellow-color"></i> 
							<b> 3.8 </b>  
							</span>  
						</td>
						<td>
							<span class="stars">
							<i class="fa fa-star yellow-color"></i>
							<i class="fa fa-star yellow-color"></i> 
							<i class="fa fa-star"></i> 
							<i class="fa fa-star"></i> 
							<i class="fa fa-star "></i> 
							<b> 3.8 </b>  
							</span>  
						</td>
					</tr>
					<tr>
						<th> More Information </th>
						<td>  <a href="" class="comparision-table-btn yellow-bg"> BOOK SERVICE </a> </td>
						<td> <a href="" class="comparision-table-btn yellow-bg"> BOOK SERVICE </a>  </td>
						<td>  <a href="" class="comparision-table-btn yellow-bg"> BOOK SERVICE </a> </td>
					</tr>
				</tbody>
			</table>
		</div>	
	</div>
</section>
<!-- Comparison Table Section Ends Here -->


<section>
	<div class="container section-mobile pad-top-120 pad-bot-100">
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