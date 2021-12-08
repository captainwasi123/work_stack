@extends('user.includes.master')
@section('title', 'Personal Details')
@section('addStyle')

@endsection
@section('content')

<!-- Comparison Table Section Starts Here -->
<section class="comparison-sec">
	<div class="comparison-sec1 yellow-bg pad-top-20 pad-bot-20">
		<h3 class="blue-color no-margin text-center"> My Account </h3>
	</div>

	<div class="container pad-top-50 pad-bot-50">
		<div class="row">
			<div class="col-md-4 col-lg-3 col-sm-4 col-xs-12 pad-bot-50">
				<div class="account-handlers">
					<ul>
						<li> <a href=""> <i class="fa fa-folder"> </i> My Disputes </a> </li>
						<li class="active"> <a href=""> <i class="fa fa-user"> </i> Update Personal Details </a> </li>
						<li> <a href=""> <i class="fa fa-key"> </i> Reset Password </a> </li>
						<li> <a href=""> <i class="fa fa-credit-card"> </i> My Transactions </a> </li>
						<li> <a href=""> <i class="fa fa-star"> </i> My Favorites </a> </li>
					</ul>
				</div>
			</div>
			<div class="col-md-8 col-lg-9 col-sm-8 col-xs-12">
				<div class="personal-detail-section pad-left-50">
				 	<div class="profile-image pad-bot-10">
					 	<div class="avatar-upload">
					        <div class="avatar-edit">
					            <input type='file' name="profile-imager" id="imageUpload" accept=".png, .jpg, .jpeg" />
					            <label for="imageUpload"> <i class="fa fa-pencil"> </i> </label>
					        </div>
					        <div class="avatar-preview">
					            <div id="imagePreview" >
					            </div>
					        </div>
					    </div>
					    <div class="avatar-name">
						    <h4 class="no-margin pad-bot-10"> Aspinall Dr.S </h4>
						    <p class="no-margin"> Sydney, Australia </p>
					    </div>
				 	</div>
				 	<div class="update-profile pad-top-50">
					 	<form>
					 		<div class="row">
						 		<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
							 		<div class="form-field4">
								 		<p class="no-margin pad-bot-10"> First Name </p>
								 		<input type="text" placeholder="First Name" name="first-name">
							 		</div>
						 		</div>
						 		<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
							 		<div class="form-field4">
								 		<p class="no-margin pad-bot-10"> Last Name </p>
								 		<input type="text" placeholder="Last Name" name="last-name">
							 		</div>
						 		</div>
						 		<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
							 		<div class="form-field4">
								 		<p class="no-margin pad-bot-10"> Email Address </p>
								 		<input type="email" placeholder="Email Address" name="email-address">
							 		</div>
						 		</div>
						 		<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
							 		<div class="form-field4">
								 		<p class="no-margin pad-bot-10"> Mobile Number </p>
								 		<input type="number" placeholder="Mobile Number" name="mobile-number">
							 		</div>
						 		</div>
						 		<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
							 		<div class="form-field4" style="max-width:100%">
								 		<p class="no-margin pad-bot-10">Address </p>
								 		<textarea name="address">Enter Address</textarea>
							 		</div>
						 		</div>
						 		<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
							 		<div class="form-field4">
							 			<h6> 
							 				<input type="checkbox" checked="checked" name="terms-conditions-applied"> 
							 				Terms & Conditions Applied 
							 			</h6>
							 		</div>
						 		</div>
						 		<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center pad-top-50">
						 			<button type="submit" class="form-field4-btn yellow-bg"> UPDATE PROFILE </button>
						 		</div>
					 		</div>
					 	</form>
				 	</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Comparison Table Section Ends Here -->

@endsection