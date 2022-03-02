@extends('user.includes.master')
@section('title', 'Personal Details')
@section('addStyle')

@endsection
@section('content')

<!-- Comparison Table Section Starts Here -->
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
<!-- Comparison Table Section Ends Here -->

@endsection