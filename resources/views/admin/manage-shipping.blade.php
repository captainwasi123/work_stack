@extends('admin.includes.master')
@section('title', 'Manage Shipping | Admin')
@section('addStyle')

@endsection
@section('content')

<div class="page-wrapper pad-top-70">
           <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="page-breadcum">
                        <h3 class="no-margin">Manage Shipping</h3>
                    </div>
                </div>            
            </div>
            <div class="container-fluid pad-top-30">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card dasboard-card2">
                            <div class="card-header blue-bg">
                                <h4 class="m-b-0 text-white">Vendor Shipping Management</h4>
                            </div>
                            <div class="card-body">
                                <form action="#" class="form-horizontal">
                                    <div class="form-body">                                        
                                        <div class="row">                                            
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-12 form-label-custom">Invoice and Packing Slip Address/VAT/Tax Information:</label>
                                                    <div class="col-md-12">
                                                        <textarea class="form-control form-textarea-custom" style="height: 200px !important;"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                    
                                    </div>
                                    <hr>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-success form-btn-custom" style="float: left;">Save Information</button>
                                            </div>                                            
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection