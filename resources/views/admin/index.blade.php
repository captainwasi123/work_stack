@extends('admin.includes.master')
@section('title', 'Dashboard | Admin')
@section('addStyle')

@endsection
@section('content')
<div class="page-wrapper pad-top-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card dasboard-card">
                            <div class="card-body yellow-bg">
                                <div class="row">
                                    <div class="col-8">
                                    	<h2 class="no-margin">12</h2>
                                        <h6 class="no-margin">Pending Order</h6></div>
	                                    <div class="col-4 align-self-center text-right p-l-0">
	                                        <img src="{{URL::to('/public/admin')}}/images/dash-icon1.jpg">
	                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card dasboard-card">
                            <div class="card-body yellow-bg">
                                <div class="row">
                                    <div class="col-8">
                                    	<h2 class="no-margin">20</h2>
                                        <h6 class="no-margin">Pending Order</h6></div>
	                                    <div class="col-4 align-self-center text-right p-l-0">
	                                        <img src="{{URL::to('/public/admin')}}/images/dash-icon2.jpg">
	                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card dasboard-card">
                            <div class="card-body yellow-bg">
                                <div class="row">
                                    <div class="col-8">
                                    	<h2 class="no-margin">5</h2>
                                        <h6 class="no-margin">Refund Request</h6></div>
	                                    <div class="col-4 align-self-center text-right p-l-0">
	                                        <img src="{{URL::to('/public/admin')}}/images/dash-icon3.jpg">
	                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card dasboard-card">
                            <div class="card-body yellow-bg">
                                <div class="row">
                                    <div class="col-8">
                                    	<h2 class="no-margin">$700</h2>
                                        <h6 class="no-margin">Total Earn</h6></div>
	                                    <div class="col-4 align-self-center text-right p-l-0">
	                                        <img src="{{URL::to('/public/admin')}}/images/dash-icon4.jpg">
	                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="card dasboard-card2">
                            <div class="card-body no-pad">
                                <div class="d-flex flex-wrap">
                                    <div>
                                        <h4 class="card-title">Yearly Earning</h4>
                                    </div>
                                </div>
                                <div id="morris-area-chart2" style="height: 405px;"></div>
                            </div>
                        </div>
                        <div class="card card-default">
                            <div class="card-header">
                                <div class="card-actions">
                                    <a class="" data-action="collapse"><i class="ti-minus"></i></a>
                                    <a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
                                    <a class="btn-close" data-action="close"><i class="ti-close"></i></a>
                                </div>
                                <h4 class="card-title m-b-0">Product Overview</h4>
                            </div>
                            <div class="card-body collapse show">
                                <div class="table-responsive">
                                    <table class="table product-overview">
                                                <thead>
                                                    <tr>
                                                        <th>Customer</th>
                                                        <th>Photo</th>
                                                        <th>Quantity</th>
                                                        <th>Date</th>
                                                        <th>Status</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Steave Jobs</td>
                                                        <td>
                                                            <img src="{{URL::to('/public/admin')}}/gallery/chair.jpg" alt="iMac" width="80">
                                                        </td>
                                                        <td>20</td>
                                                        <td>10-7-2017</td>
                                                        <td>
                                                            <span class="label label-success font-weight-100">Paid</span>
                                                        </td>
                                                        <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Varun Dhavan</td>
                                                        <td>
                                                            <img src="{{URL::to('/public/admin')}}/gallery/chair2.jpg" alt="iPhone" width="80">
                                                        </td>
                                                        <td>25</td>
                                                        <td>09-7-2017</td>
                                                        <td>
                                                            <span class="label label-warning font-weight-100">Pending</span>
                                                        </td>
                                                        <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ritesh Desh</td>
                                                        <td>
                                                            <img src="{{URL::to('/public/admin')}}/gallery/chair3.jpg" alt="apple_watch" width="80">
                                                        </td>
                                                        <td>12</td>
                                                        <td>08-7-2017</td>
                                                        <td>
                                                            <span class="label label-success font-weight-100">Paid</span>
                                                        </td>
                                                        <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hrithik</td>
                                                        <td>
                                                            <img src="{{URL::to('/public/admin')}}/gallery/chair4.jpg" alt="mac_mouse" width="80">
                                                        </td>
                                                        <td>18</td>
                                                        <td>02-7-2017</td>
                                                        <td>
                                                            <span class="label label-danger font-weight-100">Failed</span>
                                                        </td>
                                                        <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash"></i></a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <!-- Column -->
                        <div class="card card-default">
                            <div class="card-header">
                                <div class="card-actions">
                                    <a class="" data-action="collapse"><i class="ti-minus"></i></a>
                                    <a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
                                    <a class="btn-close" data-action="close"><i class="ti-close"></i></a>
                                </div>
                                <h4 class="card-title m-b-0">Order Stats</h4>
                            </div>
                            <div class="card-body collapse show">
                            <div id="morris-donut-chart" class="ecomm-donute" style="height: 317px;"></div>
                                <ul class="list-inline m-t-20 text-center">
                                <li >
                                    <h6 class="text-muted"><i class="fa fa-circle text-info"></i> Order</h65>
                                    <h4 class="m-b-0">8500</h4>
                                </li>
                                <li>
                                    <h6 class="text-muted"><i class="fa fa-circle text-danger"></i> Pending</h6>
                                    <h4 class="m-b-0">3630</h4>
                                </li>
                                <li>
                                    <h6 class="text-muted"> <i class="fa fa-circle text-success"></i> Delivered</h6>
                                    <h4 class="m-b-0">4870</h4>
                                </li>
                            </ul>

                            </div>
                        </div>                        
                    </div>
                </div>

                <!-- <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> -->

@endsection