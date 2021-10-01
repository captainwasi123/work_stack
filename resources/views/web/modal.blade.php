@extends('web.includes.master')
@section('title', 'Modal')
@section('content')
</br></br></br></br>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".signup-popup">Sign up</button>

<div class="modal fade modal-size1 bs-example-modal-lg signup-popup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">      
            <div class="custom-modal1">
                <button type="button" class="close1" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="inner-modal">
                        <div class="row">
                            <div class="col-md-4 col-lg-5 col-sm-6 col-xs-12 ">
                                <div class="inner-modal-side-one yellow">
                                    <h3> Welcome Back!  </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                                    <button type="button" class="btn btn-primary">Sign in</button>
                                </div>    
                            </div>

                            <div class="col-md-8 col-lg-7 col-sm-6 col-xs-12">
                                <div class="custom-modal1-form">
                                    <div class="welcome-form-head">
                                        <h4> SIGN UP  </h4>
                                    </div>

                                    <div class="welcome-form-data">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                                <div class="form-field1">
                                                    <input type="text" placeholder="First Name" name="First Name"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                                <div class="form-field1">
                                                    <input type="text" placeholder="Last Name" name="Last Name"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                                <div class="form-field1">
                                                    <input type="text" placeholder="Email Address" name="email-address"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                                <div class="form-field1">
                                                    <input type="number" placeholder="Phone" name="contact-number"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                                <div class="form-field1">
                                                    <input type="password" placeholder="Password" name="password"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                                <div class="form-field1">
                                                    <input type="password" placeholder="Confirm Password" name="confirm-password"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                                <div class="form-field1">
                                                    <input type="text" placeholder="Address" name="address"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                                <div class="form-field1">
                                                    <input type="text" placeholder="Post Code" name="post-code"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-field1">
                                            <button class="submit-btn1"> Sign Up</button>
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

<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".signin-popup">Sign in</button>
    <div class="modal fade modal-size1 bs-example-modal-lg signin-popup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">            
                <div class="custom-modal1">
                    <button type="button" class="close1" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <div class="inner-modal">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 ">
                                    <div class="inner-modal-side-one yellow">
                                        <h3> Hello, Friends !  </h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                                        <button type="button" class="btn btn-primary">Sign up</button>
                                    </div>    
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                    <div class="custom-modal2-form" >
                                        <div class="welcome-form-head">
                                            <h4> Sign In  </h4>
                                        </div>
                                        <div class="welcome-form-data">                                        
                                            <div class="form-field1">
                                                <input type="text" placeholder="Email Address" name="email-address"/>
                                            </div>
                                            <div class="form-field1" >
                                                <input type="password" placeholder="Password" name="password"/>
                                                <div class="forget-password" >
                                                <a href="#">Forget Password? </a>
                                            </div>
                                            </div>
                                            
                                            <div class="form-field1">
                                                <button class="submit-btn1"> Login </button>
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

<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".thankyou-popup">Thank you</button>
    <div class="modal fade modal-size2 bs-example-modal-lg thankyou-popup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">                
                <div class="custom-modal2">
                    <button type="button" class="close1" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="custom-modal2-inner">
                        <img alt="smiley" src="{{URL::to('/public/website')}}/images/thank-you.png"/>
                        <h6> Thanks for Registering on Smile Bee ! <br/> Please Verify your Email Address. </h6>
                        <a href="" class="custom-modal2-btn"> GO TO HOME </a>
                    </div>              
                </div>
            </div>
        </div>
    </div>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".email-account-verify-popup">Email Account Verfiy</button>
<div class="modal fade modal-size4 bs-example-modal-lg email-account-verify-popup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">            
            <div class="custom-modal3">
                <button type="button" class="close1" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="verify-account-data">
                        <h4> Verify Your Email Account </h4>
                        <p> Please enter the code that we have sent you an email for account verification. </p>
                            <form>
                                <span> <input type="number"  name="text-code1"/> </span>
                                <span> <input type="number"  name="text-code2"/> </span>
                                <span> <input type="number"  name="text-code3"/> </span>
                                <span> <input type="number"  name="text-code4"/> </span>
                                <span> <input type="number"  name="text-code5"/> </span>
                                <h6> <button class="custom-btn1"> SUBMIT </button> </h6>
                            </form>
                    </div>
            </div>
        </div>
    </div>
</div>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".account-verify-done-popup">Account Verification done</button>
    <div class="modal fade modal-size2 bs-example-modal-lg account-verify-done-popup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="custom-modal3" >
                    <button type="button" class="close1" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <div class="succes-text">
                            <i class="fa fa-check"> </i>
                            <h4> Account Verification Done Successfully ! </h4>
                        </div>
                </div>
            </div>
        </div>
    </div>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".home-maintain-service-popup">Home Maintainance Service</button>
    <div class="modal fade modal-size1 bs-example-modal-lg home-maintain-service-popup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="custom-modal3" >
                    <button type="button" class="close1" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="service-catagory-main">
                        <div class="row">
                                <div class="col-md-12 col-lg-12 col-sm-6 col-xs-12 ">
                                    <div class="service-catagory-header">
                                        <h2>Home Maintanence</h2>
                                        <h3>Please select subcategories</h3>
                                    </div>
                                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 ">
                                        <div class="service-popup">
                                            <img alt="work-image" src="{{URL::to('/public/website')}}/images/service-catagory.png"/>
                                            <h3> Home Cleaning </h3>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 ">
                                        <div class="service-popup">
                                            <img alt="work-image" src="{{URL::to('/public/website')}}/images/service-catagory2.png"/>
                                            <h3> Home Cleaning </h3>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 ">
                                        <div class="service-popup">
                                            <img alt="work-image" src="{{URL::to('/public/website')}}/images/service-catagory3.png"/>
                                            <h3> Home Cleaning </h3>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 ">
                                        <div class="service-popup">
                                            <img alt="work-image" src="{{URL::to('/public/website')}}/images/service-catagory4.png"/>
                                            <h3> Home Cleaning </h3>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 ">
                                        <div class="service-popup">
                                            <img alt="work-image" src="{{URL::to('/public/website')}}/images/service-catagory5.png"/>
                                            <h3> Home Cleaning </h3>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 ">
                                        <div class="service-popup">
                                            <img alt="work-image" src="{{URL::to('/public/website')}}/images/service-catagory6.png"/>
                                            <h3> Home Cleaning </h3>
                                        </div>
                                    </div>                                        
                                </div>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
        </div>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".add-address-popup">Address</button>
<div class="modal fade modal-size3 bs-example-modal-lg add-address-popup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">        
            <div class="custom-modal4">
                <button type="button" class="close1" style="background:#4e5864" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>            
                <div class="verify-address-data">
                    <h2>Add your Address</h2>
                    <form>
                        <div class="form-field3">
                            <p> Contact Number </p>
                            <input type="text" placeholder="" name="contact-number"/>
                        </div>
                        <div class="add-field1">
                            <button> <i class="fa fa-check"> </i> Work  </button>
                            <button class="active"> <i class="fa fa-check"> </i> Home </button>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                <div class="form-field3">
                                    <p> Post Code </p>
                                    <input type="text" placeholder="" name="post-code"/>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                <div class="form-field3">
                                    <p> Locality </p>
                                    <input type="text" placeholder="" name="locality"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-field3">
                            <p> Address </p>
                            <textarea></textarea>
                        </div>
                        <div class="form-field3">
                            <button type="submit" class="custom-btn2" value="ADD"> ADD </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".address-add-done-popup">Address add Success</button>
    <div class="modal fade modal-size2 bs-example-modal-lg address-add-done-popup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="custom-modal3" >
                    <button type="button" class="close1" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <div class="succes-text">
                            <i class="fa fa-check"> </i>
                            <h4> Address Added Successfully ! </h4>
                        </div>
                </div>
            </div>
        </div>
    </div>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".promo-code-popup">Promo Code</button>
    <div class="modal fade modal-size3 bs-example-modal-lg promo-code-popup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">            
                <div class="custom-modal4">
                    <button type="button" class="close1" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <div class="promo-code-sec">
                            <h4> Promo Codes </h4>
                                <div class="coupon-field">
                                    <input type="text" placeholder="Enter Coupon Code" name="coupon-code"/>
                                    <button class="col-orange">APPLY</button>
                                </div>
                                <div class="promo-code-data">
                                    <h3> Payment Offers </h3>
                                    <div>
                                        <img alt="paytm" src="{{URL::to('/public/website')}}/images/pay-1.png"/>
                                        <h6> Get Rs. 25 cashback (No Coupon Required) </h6>
                                        <p> Get Rs. 25 cashback with Paytm UP! </p>
                                        <a href=""> View T&C </a>
                                    </div>
                                    <div>
                                        <img alt="paytm" src="{{URL::to('/public/website')}}/images/pay-2.png"/>
                                        <h6> Get Rs. 25 cashback (No Coupon Required) </h6>
                                        <p> Get Rs. 25 cashback with Paytm UP! </p>
                                        <a href=""> View T&C </a>
                                    </div>
                                </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
 
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".promo-code-done-popup">Promo Code Success</button>
    <div class="modal fade modal-size2 bs-example-modal-lg promo-code-done-popup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="custom-modal3" >
                    <button type="button" class="close1" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <div class="succes-text">
                            <i class="fa fa-check"> </i>
                            <h4> Promocode Applied Successfully ! </h4>
                        </div>
                </div>
            </div>
        </div>
    </div>
 
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".reason-cancellation">Reason for Cancellation</button>
    <div class="modal fade modal-size3 bs-example-modal-lg reason-cancellation" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">            
                <div class="custom-modal4">
                    <button type="button" class="close1" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <div class="verify-address-data">
                            <h4> Reason for Cancellation </h4>
                            <form>
                                <div class="form-field3">
                                    <textarea placeholder="Type Here..." style="height: 150px;margin-top: 15px;"></textarea>
                                </div>
                                <div class="form-field3">
                                    <button type="submit" class="custom-btn2" > SUBMIT</button>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".service-booked-done-popup">Service Booked Success</button>
    <div class="modal fade modal-size2 bs-example-modal-lg service-booked-done-popup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="custom-modal3" >
                    <button type="button" class="close1" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <div class="succes-text">
                            <i class="fa fa-check"> </i>
                            <h4> Service Booked Successfully ! </h4>
                        </div>
                </div>
            </div>
        </div>
    </div>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".add-candidate-details-popup">Add Candidate Details</button>
    <div class="modal fade modal-size3 bs-example-modal-lg add-candidate-details-popup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="custom-modal4">
                    <button type="button" class="close1" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="time-slot-data">
                    <h4>Add Candidate Detials</h4>
                        <form>
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                    <div class="form-field3">
                                        <p> Candidate Name </p>
                                        <input type="text" placeholder="" name="candidate-name">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                    <div class="form-field3">
                                        <p> Class </p>
                                        <select>
                                            <option> 12th (Non-Medical) </option>
                                            <option> 12th (Non-Medical) </option>
                                            <option> 12th (Non-Medical) </option>
                                            <option> 12th (Non-Medical) </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div class="form-field3" style="margin-bottom: 0px;">
                                        <p> Comments </p>
                                        <textarea style="height: 120px;" placeholder="Add Comment"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="time-data-submit">
                                <input  type="submit" class="custom-btn2 corner-rounded" value="SUBMIT" name=""> 
                                <input  type="submit" class="custom-btn2 corner-rounded blue" value="ADD ATTENDANCE" name=""> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</br></br>
@endsection