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
                                <div id="morris-area-chart2" style="height: 310px;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="card card-default dasboard-card2">
                            <div class="card-header blue-bg">
                                <div class="card-actions">
                                    <a class="" data-action="collapse"><i class="ti-minus"></i></a>
                                    <a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
                                    <a class="btn-close" data-action="close"><i class="ti-close"></i></a>
                                </div>
                                <h4 class="card-title m-b-0">Top Sells Products</h4>
                            </div>
                            <div class="card-body collapse show">
                                <div class="dasboard-card3">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-3 col-3">
                                            <img src="{{URL::to('/public/admin')}}/images/product5.jpg" width="100%">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-6">
                                            <h3 class="no-margin">Bluetooth Smart Watch</h3>
                                            <h5 class="no-margin">$225</h5>
                                        </div>
                                        <div class="col-lg-4 col-md-3 col-3">
                                            <div style="text-align: right;">
                                                <h4 class="no-margin yellow-color">$2250</h4>
                                                <p class="no-margin">10 Sales</p>
                                            </div>                                         
                                        </div>
                                    </div>
                                </div>
                                <div class="dasboard-card3">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-3 col-3">
                                            <img src="{{URL::to('/public/admin')}}/images/product5.jpg" width="100%">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-6">
                                            <h3 class="no-margin">Bluetooth Smart Watch</h3>
                                            <h5 class="no-margin">$225</h5>
                                        </div>
                                        <div class="col-lg-4 col-md-3 col-3">
                                            <div style="text-align: right;">
                                                <h4 class="no-margin yellow-color">$2250</h4>
                                                <p class="no-margin">10 Sales</p>
                                            </div>                                         
                                        </div>
                                    </div>
                                </div>
                                <div class="dasboard-card3">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-3 col-3">
                                            <img src="{{URL::to('/public/admin')}}/images/product5.jpg" width="100%">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-6">
                                            <h3 class="no-margin">Bluetooth Smart Watch</h3>
                                            <h5 class="no-margin">$225</h5>
                                        </div>
                                        <div class="col-lg-4 col-md-3 col-3">
                                            <div style="text-align: right;">
                                                <h4 class="no-margin yellow-color">$2250</h4>
                                                <p class="no-margin">10 Sales</p>
                                            </div>                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                         
                    </div>
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="card dasboard-card2" >
                            <div class="card-header blue-bg">
                                <div class="card-actions">
                                    <a class="" data-action="collapse"><i class="ti-minus"></i></a>
                                    <a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
                                    <a class="btn-close" data-action="close"><i class="ti-close"></i></a>
                                </div>
                                <h4 class="card-title m-b-0">Product Overview</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>User</th>
                                                <th>Opened by</th>
                                                <th>Email</th>
                                                <th>Subject</th>
                                                <th>Status</th>
                                                <th>Assign To</th>
                                                <th>Date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td width="5%">
                                                    <img src="{{URL::to('/public/admin')}}/images/user-pic.png" alt="iMac" width="80">
                                                </td>
                                                <td>Mason vox</td>
                                                        
                                                <td>test@gmail.com</td>
                                                <td>Mason vox</td>
                                                <td><span class="label label-success font-weight-100">Closed</span></td>
                                                <td>Mason vox</td>
                                                <td>10-7-2017</td>
                                                <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td width="5%">
                                                    <img src="{{URL::to('/public/admin')}}/images/user-pic.png" alt="iMac" width="80">
                                                </td>
                                                <td>Mason vox</td>
                                                        
                                                <td>test@gmail.com</td>
                                                <td>Mason vox</td>
                                                <td><span class="label label-success font-weight-100">Closed</span></td>
                                                <td>Mason vox</td>
                                                <td>10-7-2017</td>
                                                <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>                
                    </div>
                </div>
            </div>
        </div>

@endsection