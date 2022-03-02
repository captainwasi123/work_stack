@extends('user.includes.master')
@section('title', 'Reset Password')
@section('addStyle')
<style type="text/css">
	a.show-pass {
    position: absolute;
    right: 35px;
    top: 67%;
    color: #b3b3b3;
}

</style>
@endsection
@section('content')

<!-- Comparison Table Section Starts Here -->
<div class="update-profile pad-left-50">
 	<form>
 		<div class="row">
	 		<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
		 		<div class="form-field4">
			 		<p class="no-margin pad-bot-10"> Old Password </p>
			 		<a href="" class="show-pass"> <i class="fa fa-eye"> </i> </a>
			 		<input type="password" placeholder="" name="old-password">
		 		</div>
	 		</div>
	 		<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
		 		<div class="form-field4">
			 		<p> New Password </p>
			 		<a href="" class="show-pass"> <i class="fa fa-eye"> </i> </a>
			 		<input type="password" placeholder="" name="new-password">
		 		</div>
	 		</div>
	 		<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
		 		<div class="form-field4">
			 		<p> Confirm New Password </p>
			 		<a href="" class="show-pass"> <i class="fa fa-eye"> </i> </a>
			 		<input type="password" placeholder="" name="confirm-new-password">
		 		</div>
	 		</div>
	 		<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 pad-top-50">
		 		<button type="submit" class="form-field4-btn yellow-bg"> SUBMIT </button>
	 		</div>
 		</div>
 	</form>
</div>
<!-- Comparison Table Section Ends Here -->

@endsection