@extends('admin.includes.master')
@section('title', 'Transaction | Admin')
@section('addStyle')

@endsection
@section('content')

<div class="page-wrapper pad-top-70">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="page-breadcum">
                        <h3 class="no-margin">Transactions</h3>
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
                                <h4 class="card-title m-b-0">Transactions List</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Transaction Id</th>
                                                <th>Comment Message</th>
                                                <th>Transaction Amount</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Sep 25,2020</td>
                                                <td>tr-BTmsiiasXSsdDere </td>
                                                <td><span class="label label-success font-weight-100"><i class="fa fa-check"></i> Paid</span></td>
                                                <td>$250</td>                                                        
                                                <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>Sep 25,2020</td>
                                                <td>tr-BTmsiiasXSsdDere </td>
                                                <td><span class="label label-success font-weight-100"><i class="fa fa-check"></i> Paid</span></td>
                                                <td>$250</td>                                                        
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