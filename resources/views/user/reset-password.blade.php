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
<section class="comparison-sec">
	<div class="comparison-sec1 yellow-bg pad-top-20 pad-bot-20">
		<h3 class="blue-color no-margin text-center"> My Account </h3>
	</div>

	<div class="container pad-top-50 pad-bot-50">
		<div class="row">
			<div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
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
			<div class="col-md-9 col-lg-9 col-sm-8 col-xs-12">
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
			</div>
		</div>
	</div>
</section>
<!-- Comparison Table Section Ends Here -->

@endsection