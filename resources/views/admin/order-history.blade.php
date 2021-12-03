@extends('admin.includes.master')
@section('title', 'Order History | Admin')
@section('addStyle')

@endsection
@section('content')

<div class="page-wrapper pad-top-70">
            <div class="row" style="background: white;">
                <div class="col-lg-6 col-md-6">
                    <div class="page-breadcum">
                        <h3 class="no-margin">Order History</h3>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="order-history-btn">
                        <a href="" class="yellow-bg">Download All Invoice Slip</a>
                        <a href="" class="blue-bg">Download All Shipping Slip</a>
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
                                <h4 class="card-title m-b-0">Order List</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Product Name</th>
                                                <th>Customer Name</th>
                                                <th>Order Status</th>
                                                <th>Date</th>
                                                <th>Order Total</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Product 1</td>
                                                <td>Product 1</td>
                                                <td><span class="label label-success font-weight-100">Completed</span></td>
                                                <td>Sep 25,2020</td> 
                                                <td>$250</td>                                                        
                                                <td><a href="#" class="order-history-btn2 blue-bg">VIEW</a></td>
                                            </tr> 
                                            <tr>
                                                <td>1</td>
                                                <td>Product 1</td>
                                                <td>Product 1</td>
                                                <td><span class="label label-success font-weight-100">Completed</span></td>
                                                <td>Sep 25,2020</td> 
                                                <td>$250</td>                                                        
                                                <td><a href="#" class="order-history-btn2 blue-bg">VIEW</a></td>
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