@extends('seller.includes.master')
@section('title', 'All Products | seller')
@section('addStyle')

@endsection
@section('content')

<div class="page-wrapper pad-top-70">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="page-breadcum">
                        <h3 class="no-margin">Products</h3>
                    </div>
                </div>            
            </div>
            <div class="container-fluid pad-top-30">
                <div class="row">                    
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="card dasboard-card2" >
                            <div class="card-header blue-bg">
                                <div class="card-actions">
                                    <a class="" data-action="collapse"><i class="ti-minus"></i></a>
                                    <a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
                                    <a class="btn-close" data-action="close"><i class="ti-close"></i></a>
                                </div>
                                <h4 class="card-title m-b-0">Product List</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Product Name</th>
                                                <th>Price</th>
                                                <th>Status</th>
                                                <th>Confirmed</th>
                                                <th>Pending</th>
                                                <th>Sold</th>
                                                <th>Earn Amount</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td width="5%">
                                                    <img src="{{URL::to('/public/seller')}}/images/product5.jpg" alt="iMac" width="80">
                                                </td>
                                                <td>Mason vox</td>
                                                <td>$225</td>
                                                <td>
                                                    <span class="label label-success font-weight-100">Approved</span>
                                                </td>                                                        
                                                <td>1</td>
                                                <td>0</td>                                                
                                                <td>1</td>
                                                <td>$225</td>
                                                <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td width="5%">
                                                    <img src="{{URL::to('/public/seller')}}/images/product5.jpg" alt="iMac" width="80">
                                                </td>
                                                <td>Mason vox</td>
                                                <td>$225</td>
                                                <td>
                                                    <span class="label label-success font-weight-100">Cancelled</span>
                                                </td>                                                        
                                                <td>1</td>
                                                <td>0</td>                                                
                                                <td>1</td>
                                                <td>$225</td>
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