@extends('web.includes.master')
@section('title', 'Modal')
@section('content')


<!-- sign up popup start -->

<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".signup-popup">Sign up</button>
<!-- Sign Up Popup Starts Here -->
<div class="modal fade modal-size1 bs-example-modal-lg signup-popup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="custom-modal custom-modal-bg1">
                <button type="button" class="close1" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="inner-modal">
                        <div class="row">
                            <div class="col-md-4 col-lg-5 col-sm-6 col-xs-12">
                                <div class="inner-modal-side-one">
                                    <h3 class="blue-color no-margin"> Welcome Back! </h3>
                                    <p class="no-margin pad-top-20 pad-bot-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                                    <a class="btn inner-modal-side-one-btn blue-color">Sign in</a>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-7 col-sm-6 col-xs-12">
                                <div class="custom-modal1-form pad-top-50">
                                    <h4 class="no-margin blue-color"> SIGN UP  </h4>
                                    <form>
                                        <div class="row pad-top-30 pad-right-30">
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                                <input type="text" class="form-field-style1" placeholder="First Name" name="First Name"/>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                                <input type="text" class="form-field-style1" placeholder="Last Name" name="Last Name"/>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                                <input type="text" class="form-field-style1" placeholder="Email Address" name="email-address"/>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                                <input type="number" class="form-field-style1" placeholder="Phone" name="contact-number"/>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                                <input type="password" class="form-field-style1" placeholder="Password" name="password"/>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                                <input type="password" class="form-field-style1" placeholder="Confirm Password" name="confirm-password"/>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                                <input type="text" class="form-field-style1" placeholder="Address" name="address"/>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                                <input type="text" class="form-field-style1" placeholder="Post Code" name="post-code"/>
                                            </div>

                                             <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                <button class="trigger-btn1"> You want to become a Seller </button>
                                            </div>

                                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                <input type="submit" name="" class="form-field-style1-btn1 m-t-10" value="SIGN Up">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<!-- Sign Up Popup Ends Here -->

<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".signin-popup">Sign in</button>
<!-- Sign In Popup Starts Here -->
    <div class="modal fade modal-size1 bs-example-modal-lg signin-popup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="custom-modal custom-modal-bg1">
                    <button type="button" class="close1" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <div class="inner-modal">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                    <div class="inner-modal-side-one">
                                        <h3 class="no-margin blue-color"> Hello, Friends ! </h3>
                                        <p class="no-margin pad-top-20 pad-bot-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                                        <a class="btn inner-modal-side-one-btn blue-color">Sign up</a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                    <div class="custom-modal2-form pad-top-50" >
                                        <h4 class="no-margin blue-color text-center"> SIGN IN  </h4>
                                        <div class="row pad-top-30 pad-right-20">
                                            <div class="col-lg-12 col-md-12 col-12">
                                                <input type="text" class="form-field-style1" placeholder="Email Address" name="email-address"/>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-12">
                                                <input type="password" class="form-field-style1" placeholder="Password" name="password"/>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-12">
                                                <a href="#" class="forget-label yellow-color">Forget Password? </a>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-12">
                                                <input type="submit" name="" class="form-field-style1-btn1 m-t-20" value="SIGN IN">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

<!-- Sign In Popup Ends Here -->

<!-- thankyou popup start -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".thankyou-popup">Thank you</button>
    <div class="modal fade modal-size2 bs-example-modal-lg thankyou-popup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content text-center">
                <div class="custom-modal custom-modal-bg1">
                    <button type="button" class="close1" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="custom-modal2-inner">
                        <img src="{{URL::to('/public/website')}}/images/thank-you.png"/>
                        <h6 class="no-margin pad-top-20"> Thanks for Registering on WorkStack! </h6>
                        <h6 class="no-margin pad-top-10"> Please Verify your Email Address. </h6>
                        <a href="#" class="custom-modal2-btn m-t-30 yellow-bg"> GO TO HOME </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- thankyou popup close -->

<!-- email account verify start -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".email-account-verify-popup">Email Account Verfiy</button>
<div class="modal fade modal-size4 bs-example-modal-lg email-account-verify-popup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="custom-modal custom-modal-bg1">
                <button type="button" class="close1" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="verify-account-data text-center">
                        <h4 class="no-margin pad-top-10 pad-bot-10 blue-color"> Verify Your Email Account </h4>
                        <p class="no-margin pad-bot-20 blue-color"> Please enter the code that we have sent you an email for account verification. </p>
                        <form>
                            <input type="number" class="verify-account-data-input" name="text-code1"/>
                            <input type="number" class="verify-account-data-input" name="text-code2"/>
                            <input type="number" class="verify-account-data-input" name="text-code3"/>
                            <input type="number" class="verify-account-data-input" name="text-code4"/>
                            <input type="number" class="verify-account-data-input" name="text-code5"/>
                            <input type="submit" class="verify-account-data-btn m-t-30" name="" value="SUBMIT">
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
<!-- email account verify close -->

<!-- Account verify open -->

<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".account-verify-done-popup">Account Verification done</button>
    <div class="modal fade modal-size2 bs-example-modal-lg account-verify-done-popup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="custom-modal custom-modal-bg1" >
                    <button type="button" class="close1" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <div class="succes-text text-center">
                            <i class="fa fa-check"> </i>
                            <h4 class="no-margin blue-color pad-top-20"> Account Verification Done Successfully ! </h4>
                        </div>
                </div>
            </div>
        </div>
    </div>

<!-- Account verify close -->

<!-- Home Maintanance start -->

<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".home-maintain-service-popup">Home Maintainance Service</button>
    <div class="modal fade modal-size1 bs-example-modal-lg home-maintain-service-popup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="custom-modal custom-modal-bg1" >
                    <button type="button" class="close1" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="service-catagory-main text-center">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-6 col-xs-12 ">
                                <div class="service-catagory-header pad-bot-30">
                                    <h2 class="no-margin blue-color pad-top-10 pad-bot-10">Home Maintanence</h2>
                                    <h3 class="no-margin blue-color">Please select subcategories</h3>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 ">
                                <div class="service-popup pad-top-20 pad-bot-20">
                                    <img alt="work-image" src="{{URL::to('/public/website')}}/images/service-catagory.png"/>
                                    <h3 class="no-margin pad-top-10"> Home Cleaning </h3>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 ">
                                <div class="service-popup pad-top-20 pad-bot-20">
                                    <img alt="work-image" src="{{URL::to('/public/website')}}/images/service-catagory2.png"/>
                                    <h3 class="no-margin pad-top-10"> Home Cleaning </h3>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 ">
                                <div class="service-popup pad-top-20 pad-bot-20">
                                    <img alt="work-image" src="{{URL::to('/public/website')}}/images/service-catagory3.png"/>
                                    <h3 class="no-margin pad-top-10"> Home Cleaning </h3>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 ">
                                <div class="service-popup pad-top-20 pad-bot-20">
                                    <img alt="work-image" src="{{URL::to('/public/website')}}/images/service-catagory4.png"/>
                                    <h3 class="no-margin pad-top-10"> Home Cleaning </h3>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 ">
                                <div class="service-popup pad-top-20 pad-bot-20">
                                    <img alt="work-image" src="{{URL::to('/public/website')}}/images/service-catagory5.png"/>
                                    <h3 class="no-margin pad-top-10"> Home Cleaning </h3>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 ">
                                <div class="service-popup pad-top-20 pad-bot-20">
                                    <img alt="work-image" src="{{URL::to('/public/website')}}/images/service-catagory6.png"/>
                                    <h3 class="no-margin pad-top-10"> Home Cleaning </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Home Maintanance close -->

<!-- address popup start -->

<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".add-address-popup">Address</button>

<div class="modal fade modal-size3 bs-example-modal-lg add-address-popup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="custom-modal custom-modal-bg1">
                <button type="button" class="close1" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <div class="verify-address-data">
                    <h2 class="no-margin blue-color pad-bot-30">Add your Address</h2>
                    <form>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-field2 pad-bot-20">
                                    <p class="no-margin blue-color pad-bot-10"> Contact Number </p>
                                    <input type="text" class="form-field-style2" placeholder="" name="contact-number"/>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-field2-type  pad-bot-20">
                                    <a class="blue-color"> <i class="fa fa-check"> </i> Work </a>
                                    <a class="active"> <i class="fa fa-check"> </i> Home </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                <div class="form-field2 pad-bot-20">
                                    <p class="no-margin blue-color pad-bot-10"> Post Code </p>
                                    <input type="text" class="form-field-style2" placeholder="" name="post-code"/>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                <div class="form-field2 pad-bot-20">
                                    <p class="no-margin blue-color pad-bot-10"> Locality </p>
                                    <input type="text" class="form-field-style2" placeholder="" name="locality"/>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-field2 pad-bot-20">
                                    <p class="no-margin blue-color pad-bot-10"> Address </p>
                                    <textarea class="form-field-style2"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-12">
                                <input type="submit" class="form-field2-btn yellow-bg" value="SUBMIT">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- address popup close -->

<!-- address add success start -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".address-add-done-popup">Address add Success</button>
    <div class="modal fade modal-size2 bs-example-modal-lg address-add-done-popup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="custom-modal custom-modal-bg1 text-center" >
                    <button type="button" class="close1" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <div class="succes-text">
                            <i class="fa fa-check"> </i>
                            <h4 class="no-margin pad-top-10"> Address Added Successfully ! </h4>
                        </div>
                </div>
            </div>
        </div>
    </div>
<!-- address add success close -->

<!-- promo code start -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".promo-code-popup">Promo Code</button>
    <div class="modal fade modal-size3 bs-example-modal-lg promo-code-popup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="custom-modal custom-modal-bg1">
                    <button type="button" class="close1" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <div class="promo-code-sec">
                            <h4 class="no-margin blue-color pad-bot-20"> Promo Codes </h4>
                                <div class="coupon-field">
                                    <input type="text" placeholder="Enter Coupon Code" class="coupon-field-input" name="coupon-code"/>
                                    <input type="submit" class="coupon-field-btn yellow-color" name="" value="APPLY">
                                </div>
                                <div class="promo-code-data pad-top-30">
                                    <h3 class="pad-bot-20 no-margin"> Payment Offers </h3>
                                    <div class="payment-offers">
                                        <img alt="paytm" src="{{URL::to('/public/website')}}/images/pay-1.png"/>
                                        <h6 class="pad-top-10 pad-bot-10 no-margin">Get Rs. 25 cashback (No Coupon Required) </h6>
                                        <p class="no-margin pad-bot-20"> Get Rs. 25 cashback with Paytm UP! </p>
                                        <a href="#" class="blue-color"> View T&C </a>
                                        <hr>
                                    </div>
                                    <div class="payment-offers">
                                        <img alt="paytm" src="{{URL::to('/public/website')}}/images/pay-2.png"/>
                                        <h6 class="pad-top-10 pad-bot-10 no-margin"> Get Rs. 25 cashback (No Coupon Required) </h6>
                                        <p class="no-margin pad-bot-20"> Get Rs. 25 cashback with Paytm UP! </p>
                                        <a href="#" class="blue-color"> View T&C </a>
                                    </div>
                                </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
 <!-- promo code close -->

<!-- promo code success -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".promo-code-done-popup">Promo Code Success</button>
    <div class="modal fade modal-size2 bs-example-modal-lg promo-code-done-popup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="custom-modal custom-modal-bg1">
                    <button type="button" class="close1" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <div class="succes-text text-center">
                            <i class="fa fa-check"> </i>
                            <h4 class="no-margin pad-top-10"> Promocode Applied Successfully ! </h4>
                        </div>
                </div>
            </div>
        </div>
    </div>
 <!-- promo code close -->

<!-- reason for cancellation start-->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".reason-cancellation">Reason for Cancellation</button>
    <div class="modal fade modal-size3 bs-example-modal-lg reason-cancellation" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="custom-modal custom-modal-bg1">
                    <button type="button" class="close1" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <div class="verify-address-data">
                            <h4 class="no-margin blue-color pad-bot-20"> Reason for Cancellation </h4>
                            <form>
                                <div class="form-field2">
                                    <textarea class="form-field-style2" style="height: 150px;" placeholder="Type Here..."></textarea>
                                    <input type="submit" class="form-field2-btn form-field3-btn yellow-bg m-t-10" value="SUBMIT">
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
<!-- reason for cancellation close-->

<!-- service booked successs start -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".service-booked-done-popup">Service Booked Success</button>
    <div class="modal fade modal-size2 bs-example-modal-lg service-booked-done-popup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content text-center">
                <div class="custom-modal custom-modal-bg1">
                    <button type="button" class="close1" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <div class="succes-text">
                            <i class="fa fa-check"> </i>
                            <h4 class="no-margin pad-top-10"> Service Booked Successfully ! </h4>
                        </div>
                </div>
            </div>
        </div>
    </div>
<!-- service booked successs close -->

<!-- add candidate start -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".add-candidate-details-popup">Add Candidate Details</button>
    <div class="modal fade modal-size3 bs-example-modal-lg add-candidate-details-popup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="custom-modal custom-modal-bg1">
                    <button type="button" class="close1" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="time-slot-data">
                    <h4 class="no-margin blue-color pad-bot-20">Add Candidate Detials</h4>
                        <form>
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                    <div class="form-field2 pad-bot-20">
                                        <p class="no-margin blue-color pad-bot-10"> Candidate Name </p>
                                        <input type="text" placeholder="" class="form-field-style2" name="candidate-name">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                    <div class="form-field2 pad-bot-20">
                                        <p class="no-margin blue-color pad-bot-10"> Class </p>
                                        <select class="form-field2-select">
                                            <option> 12th (Non-Medical) </option>
                                            <option> 12th (Non-Medical) </option>
                                            <option> 12th (Non-Medical) </option>
                                            <option> 12th (Non-Medical) </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div class="form-field2 pad-bot-20">
                                        <p class="no-margin blue-color pad-bot-10"> Comments </p>
                                        <textarea class="form-field-style2" style="height: 120px;" placeholder="Add Comment"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                   <!--  <div class="time-data-submit">
 -->                                        <input type="submit" class="form-field2-btn yellow-bg" value="SUBMIT" name="">
                                        <input type="submit" class="form-field2-btn blue-bg" value="ADD ATTENDANCE" name="">
                                  <!--   </div> -->
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- add candidate close -->
@endsection
