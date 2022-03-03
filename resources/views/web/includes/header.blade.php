<header>
  <div class="container">
    <div class="header-section pad-top-10 pad-bot-10">
      <div class="row">
        <div class="col-lg-4 col-md-5 col-5">
          <div class="logo">
            <a href="">
              <img alt="logo" src="{{URL::to('/public/website')}}/images/logo.png"/>
            </a>
          </div>
        </div>
        <div class="col-lg-8 col-md-7 col-7">
          <div class="sign-buttons">
            <a href="#">Explore</a>
            <a href="" class="blue-color sign-up-btn" data-toggle="modal" data-target=".signup-popup" > SIGN UP  </a>
            <a href="#" class="yellow-color sign-in-btn" data-toggle="modal" data-target=".signin-popup" > SIGN IN  </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- <header>
  <div class="container">
    <div class="header-section pad-top-10 pad-bot-10">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-4">
          <div class="logo">
            <a href="">
              <img alt="logo" src="{{URL::to('/public/website')}}/images/logo.png"/>
            </a>
          </div>
        </div>
        <div class="col-lg-8 col-md-8 col-8">
          <div class="sign-buttons">
            <a href="#"> SmilBee Explore</a>
            <a href="#"> Notification</a>
            <a href="#"> Order</a>
            <a href="#" class="blue-color sign-up-btn sign-up-btn-user"> SIGN OUT  </a>
            <a href="#"> <img src="{{URL::to('/public/website')}}/images/boy.png"> </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="nav-mobile" style="border-top:2px solid #f28c00;">
    <div class="container">
      <nav class="navbar navbar-expand-md navbar-light no-pad">
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <div class="navbar-nav custom-nav-dashboard pad-top-10 pad-bot-10">
                <a href="#" class="nav-item nav-link active">Buy</a>
                <a href="#" class="nav-item nav-link">My Order</a>
                <a href="#" class="nav-item nav-link">Message</a>
                <a href="#" class="nav-item nav-link">My Accounts</a>
                <a href="#" class="nav-item nav-link">Smiles</a>
              </div>
            </div>
      </nav>
    </div>
  </section>
</header> -->


<!-- sign up modal start -->

<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".signup-popup">Sign up</button> -->

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
                                    <h5 class="no-margin blue-color text-center" style="font-weight: 600;"> CREATE A BUYER ACCOUNT  </h5>
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
                                                <input type="submit" name="" class="form-field-style1-btn1 m-t-10" value="SIGN Up">
                                            </div>


                                        </div>
                                    </form>
                                    <div class="text-center pad-top-10">
                                        <span>You want to become a  <a   data-dismiss="modal" data-toggle="modal"   data-target="#seller-popup"class="trigger-btn1"> Seller </a>?</span>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<!-- Sign Up Popup Ends Here -->


<!-- sign in modal start -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".signin-popup">Sign in</button> -->

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
                                        <form>
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
                                       </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

<!-- Sign In Popup Ends Here -->



<!-- Seller Popup Starts Here -->
<div class="modal fade modal-size1 bs-example-modal-lg " id="seller-popup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
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
                                     <h5 class="no-margin blue-color text-center" style="font-weight: 600;"> CREATE A SELLER ACCOUNT  </h5>
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
                                                <input type="submit" name="" class="form-field-style1-btn1 m-t-10" value="SIGN Up">
                                            </div>
                                        </div>
                                    </form>
                                    <div class="text-center pad-top-10">
                                        <span>You want to become a  <a   data-dismiss="modal" data-toggle="modal"     data-target=".signup-popup" class="trigger-btn1 signup-popup"> Buyer </a>?</span>


                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
 <!-- Seller Popup Ends Here -->



