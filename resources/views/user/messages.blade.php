@extends('user.includes.master')
@section('title', 'My Favorites')
@section('addStyle')

@endsection
@section('content')

<!-- Comparison Table Section Starts Here -->
<section class="comparison-sec">
	<div class="comparison-sec1 yellow-bg pad-top-20 pad-bot-20">
		<h3 class="blue-color no-margin text-center"> Messages </h3>
	</div>

	<div class="container pad-top-50 pad-bot-50">
		<div class="row">
			<div class="col-md-12 col-lg-12 col-sm-4 col-xs-12">
				
	<div class="all-messages">

	<div class="row">

	<div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
	<div class="search-form shad1 no-margin">
		<input type="text" placeholder="Search" name="search-messages">
	<button> <i class="fa fa-search"> </i> </button>
	</div>
	<div class="all-person">
	<div class="row">
		<div class="col-md-3">
			<div class="message-section1 pad-top-10 pad-bot-10">
				<img alt="user-pic" src="{{URL::to('/public/website')}}/images/user-pic.png"/>
			</div>	
		</div>
		<div class="col-md-9">
			<div class="message-section1 pad-top-10 pad-bot-10">
				<h5> <b class="col-orange"> Emily Jackson </b> <span>Lorem ipsum is simplu dummy...</span> </h5>
			</div>	
			
		</div>
	</div>
	

	<div>
		<img alt="user-pic" src="{{URL::to('/public/website')}}/images/user-pic.png"/>
		<h5> <b class="col-orange"> Emily Jackson </b> <span>Lorem ipsum is simplu dummy...</span> </h5>
	</div>	

	<div>
		<img alt="user-pic" src="{{URL::to('/public/website')}}/images/user-pic.png"/>
		<h5> <b class="col-orange"> Emily Jackson </b> <span>Lorem ipsum is simplu dummy...</span> </h5>
	</div>	


	<div>
		<img alt="user-pic" src="{{URL::to('/public/website')}}/images/user-pic.png"/>
		<h5> <b class="col-orange"> Emily Jackson </b> <span>Lorem ipsum is simplu dummy...</span> </h5>
	</div>	


	<div>
		<img alt="user-pic" src="{{URL::to('/public/website')}}/images/user-pic.png"/>
		<h5> <b class="col-orange"> Emily Jackson </b> <span>Lorem ipsum is simplu dummy...</span> </h5>
	</div>	


	<div>
	<img alt="user-pic" src="{{URL::to('/public/website')}}/images/user-pic.png"/>
		<h5> <b class="col-orange"> Emily Jackson </b> <span>Lorem ipsum is simplu dummy...</span> </h5>
	</div>	

	<div>
		<img alt="user-pic" src="{{URL::to('/public/website')}}/images/user-pic.png"/>
		<h5> <b class="col-orange"> Emily Jackson </b> <span>Lorem ipsum is simplu dummy...</span> </h5>
	</div>	

	</div>
	</div>

	<div class="col-md-6 col-lg-6 col-sm-9 col-xs-12">
	<div class="chat-screen-sec">

	<div class="chat-screen-head">
	<h3> John Watson 
		<div class="message-actions">    <a href=""> <img alt="video-call" src="{{URL::to('/public/website')}}/images/video.png"/> </a> <a href=""> <img alt="audio-call" src="{{URL::to('/public/website')}}/images/call.png"/> </a>  </div> 

	</h3>
	</div>

	<div class="chat-screen-data">

	<div class="sender-message">
	<img alt="user-pic" src="{{URL::to('/public/website')}}/images/user-pic.png"/>
	<h5>   Lorem ipsum is simply dummy text of the printing and typesetting </h5>
	<p> Sent: 1100am Seen 12:00 </p>
	</div>	


	<div class="rec-message">
	<h5>   Lorem ipsum is simply dummy text of the printing and typesetting </h5>
	<img alt="user-pic" src="{{URL::to('/public/website')}}/images/user-pic.png"/>
	<p> Sent: 1100am Seen 12:00 </p>
	</div>	

	<div class="sender-message">
	<img alt="user-pic" src="{{URL::to('/public/website')}}/images/user-pic.png"/>
	<h5>   Lorem ipsum is simply dummy text of the printing and typesetting Lorem ipsum is simply dummy text of the printing and typesetting Lorem ipsum is simply dummy text of the printing and typesetting </h5>
	<p> Sent: 1100am Seen 12:00 </p>
	</div>	



	<div class="rec-message">
	<h5>   Lorem ipsum is simply dummy text of the printing and typesetting </h5>
	<img alt="user-pic" src="{{URL::to('/public/website')}}/images/user-pic.png"/>
	<p> Sent: 1100am Seen 12:00 </p>
	</div>	

	<div class="sender-message">
	<img alt="user-pic" src="{{URL::to('/public/website')}}/images/user-pic.png"/>
	<h5>   Lorem ipsum is simply dummy text of the printing and typesetting </h5>
	<p> Sent: 1100am Seen 12:00 </p>
	</div>	


	</div>

	</div>
	</div>



	<div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
	<div class="message-profile">
	<img alt="user-pic" src="{{URL::to('/public/website')}}/images/user-pic.png"/>
	<h4> John Watson </h4>
	<h5> Furniture Product's Store </h5>
	<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
	
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