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
								<button><i class="fa fa-search"></i></button>
							</div>
							<div class="all-person">
								<div class="row">
									<div class="col-lg-12">
										<div class="all-person-main">
											<div class="row">
												<div class="col-md-3 no-pad">
													<div class="message-section1 pad-top-10 pad-bot-10">
														<img alt="user-pic" src="{{URL::to('/public/website')}}/images/user-pic.png"/>
													</div>	
												</div>
												<div class="col-md-9">
													<div class="message-section1 pad-top-10 pad-bot-10">
														<h5 class="no-margin blue-color"> Emily Jackson <span>Lorem ipsum is simplu dummy...</span> </h5>
													</div>			
												</div>
											</div>
										</div>				
									</div>
									<div class="col-lg-12">
										<div class="all-person-main">
											<div class="row">
												<div class="col-md-3 no-pad">
													<div class="message-section1 pad-top-10 pad-bot-10">
														<img alt="user-pic" src="{{URL::to('/public/website')}}/images/user-pic.png"/>
													</div>	
												</div>
												<div class="col-md-9">
													<div class="message-section1 pad-top-10 pad-bot-10">
														<h5 class="no-margin blue-color"> Emily Jackson <span>Lorem ipsum is simplu dummy...</span> </h5>
													</div>			
												</div>
											</div>
										</div>				
									</div>
									<div class="col-lg-12">
										<div class="all-person-main">
											<div class="row">
												<div class="col-md-3 no-pad">
													<div class="message-section1 pad-top-10 pad-bot-10">
														<img alt="user-pic" src="{{URL::to('/public/website')}}/images/user-pic.png"/>
													</div>	
												</div>
												<div class="col-md-9">
													<div class="message-section1 pad-top-10 pad-bot-10">
														<h5 class="no-margin blue-color"> Emily Jackson <span>Lorem ipsum is simplu dummy...</span> </h5>
													</div>			
												</div>
											</div>
										</div>				
									</div>
									<div class="col-lg-12">
										<div class="all-person-main">
											<div class="row">
												<div class="col-md-3 no-pad">
													<div class="message-section1 pad-top-10 pad-bot-10">
														<img alt="user-pic" src="{{URL::to('/public/website')}}/images/user-pic.png"/>
													</div>	
												</div>
												<div class="col-md-9">
													<div class="message-section1 pad-top-10 pad-bot-10">
														<h5 class="no-margin blue-color"> Emily Jackson <span>Lorem ipsum is simplu dummy...</span> </h5>
													</div>			
												</div>
											</div>
										</div>				
									</div>
									<div class="col-lg-12">
										<div class="all-person-main">
											<div class="row">
												<div class="col-md-3 no-pad">
													<div class="message-section1 pad-top-10 pad-bot-10">
														<img alt="user-pic" src="{{URL::to('/public/website')}}/images/user-pic.png"/>
													</div>	
												</div>
												<div class="col-md-9">
													<div class="message-section1 pad-top-10 pad-bot-10">
														<h5 class="no-margin blue-color"> Emily Jackson <span>Lorem ipsum is simplu dummy...</span> </h5>
													</div>			
												</div>
											</div>
										</div>				
									</div>
									<div class="col-lg-12">
										<div class="all-person-main">
											<div class="row">
												<div class="col-md-3 no-pad">
													<div class="message-section1 pad-top-10 pad-bot-10">
														<img alt="user-pic" src="{{URL::to('/public/website')}}/images/user-pic.png"/>
													</div>	
												</div>
												<div class="col-md-9">
													<div class="message-section1 pad-top-10 pad-bot-10">
														<h5 class="no-margin blue-color"> Emily Jackson <span>Lorem ipsum is simplu dummy...</span> </h5>
													</div>			
												</div>
											</div>
										</div>				
									</div>
									<div class="col-lg-12">
										<div class="all-person-main">
											<div class="row">
												<div class="col-md-3 no-pad">
													<div class="message-section1 pad-top-10 pad-bot-10">
														<img alt="user-pic" src="{{URL::to('/public/website')}}/images/user-pic.png"/>
													</div>	
												</div>
												<div class="col-md-9">
													<div class="message-section1 pad-top-10 pad-bot-10">
														<h5 class="no-margin blue-color"> Emily Jackson <span>Lorem ipsum is simplu dummy...</span> </h5>
													</div>			
												</div>
											</div>
										</div>				
									</div>			
								</div>
							</div>
						</div>

						<div class="col-md-6 col-lg-6 col-sm-9 col-xs-12">
							<div class="chat-screen-sec">
								<div class="chat-screen-head">
									<div class="row">
										<div class="col-lg-6">
											<h3 class="no-margin"> John Watson</h3>
										</div>
										<div class="col-lg-6">
											<div class="message-actions"> 
									   			<a href=""> <img alt="video-call" src="{{URL::to('/public/website')}}/images/video.png"/> </a> 
									   			<a href=""> <img alt="audio-call" src="{{URL::to('/public/website')}}/images/call.png"/> </a>  
									   		</div> 
										</div>
									</div>
								</div>
								<div class="chat-screen-data pad-top-30">
									<div class="sender-message pad-bot-20">
										<img alt="user-pic" src="{{URL::to('/public/website')}}/images/user-pic.png"/>
										<h5> Lorem ipsum is simply dummy text of the printing and typesetting </h5>
										<p class="no-margin"> Sent: 1100am Seen 12:00 </p>
									</div>	
									<div class="rec-message pad-bot-20">
										<h5> Lorem ipsum is simply dummy text of the printing and typesetting </h5>
										<img alt="user-pic" src="{{URL::to('/public/website')}}/images/user-pic.png"/>
										<p class="no-margin"> Sent: 1100am Seen 12:00 </p>
									</div>	
									<div class="sender-message pad-bot-20">
										<img alt="user-pic" src="{{URL::to('/public/website')}}/images/user-pic.png"/>
										<h5> Lorem ipsum is simply dummy text of the printing and typesetting </h5>
										<p class="no-margin"> Sent: 1100am Seen 12:00 </p>
									</div>	
									<div class="rec-message pad-bot-20">
										<h5> Lorem ipsum is simply dummy text of the printing and typesetting </h5>
										<img alt="user-pic" src="{{URL::to('/public/website')}}/images/user-pic.png"/>
										<p class="no-margin"> Sent: 1100am Seen 12:00 </p>
									</div>	
									<div class="sender-message pad-bot-20">
										<img alt="user-pic" src="{{URL::to('/public/website')}}/images/user-pic.png"/>
										<h5> Lorem ipsum is simply dummy text of the printing and typesetting </h5>
										<p class="no-margin"> Sent: 1100am Seen 12:00 </p>
									</div>	
									<div class="rec-message pad-bot-20">
										<h5> Lorem ipsum is simply dummy text of the printing and typesetting </h5>
										<img alt="user-pic" src="{{URL::to('/public/website')}}/images/user-pic.png"/>
										<p class="no-margin"> Sent: 1100am Seen 12:00 </p>
									</div>	
								</div>
							</div>
						</div>

						<div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
							<div class="message-profile">
								<img alt="user-pic" class="pad-bot-10" src="{{URL::to('/public/website')}}/images/user-pic.png"/>
								<h4 class="no-margin pad-bot-10"> John Watson </h4>
								<h5 class="no-margin pad-bot-10"> Furniture Product's Store </h5>
								<p class="no-margin"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>		
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