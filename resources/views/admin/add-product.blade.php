@extends('admin.includes.master')
@section('title', 'Add Product | Admin')
@section('addStyle')

@endsection
@section('content')

<div class="page-wrapper pad-top-70">
           <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="page-breadcum">
                        <h3 class="no-margin">Product</h3>
                    </div>
                </div>            
            </div>

            <div class="container-fluid pad-top-30">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card dasboard-card2">
                            <div class="card-header blue-bg">
                                <h4 class="m-b-0 text-white">Add Product</h4>
                            </div>
                            <div class="card-body">
                                <form action="#" class="form-horizontal">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-12 form-label-custom">Product Type</label>
                                                    <div class="col-md-12">
                                                        <select class="form-control custom-select form-input-custom">
                                                            <option value="">Simple</option>
                                                            <option value="">Multi</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-success form-btn-custom" style="float: left;">Continue</button>
                                            </div>                                            
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                         <div class="card dasboard-card2">
                            <div class="card-header blue-bg">
                                <h4 class="m-b-0 text-white">Add Simple Product</h4>
                            </div>
                            <div class="card-body">
                                <form action="#" class="form-horizontal">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-4 pad-bot-30">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-12 form-label-custom">Profile Target Url Path</label>
                                                    <div class="col-md-12">
                                                        <input type="link" class="form-control form-input-custom" placeholder="Enter Profile Target Url Path">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 pad-bot-30">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-12 form-label-custom">Profile Page Request Url Path</label>
                                                    <div class="col-md-12">
                                                        <input type="link" class="form-control form-input-custom" placeholder="Enter Profile Page Request Url Path">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 pad-bot-30">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-12 form-label-custom">Collection Page Target Url Path</label>
                                                    <div class="col-md-12">
                                                        <input type="link" class="form-control form-input-custom" placeholder="Enter Collection Page Target Url Path">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 pad-bot-30">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-12 form-label-custom">Collection Page Request Url Path</label>
                                                    <div class="col-md-12">
                                                        <input type="link" class="form-control form-input-custom" placeholder="Enter Collection Page Request Url Path">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 pad-bot-30">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-12 form-label-custom">Review Page Target Url Path</label>
                                                    <div class="col-md-12">
                                                        <input type="link" class="form-control form-input-custom" placeholder="Enter Review Page Target Url Path">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 pad-bot-30">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-12 form-label-custom">Review Page Request Url Path</label>
                                                    <div class="col-md-12">
                                                        <input type="link" class="form-control form-input-custom" placeholder="Enter Review Page Request Url Path">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 pad-bot-30">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-12 form-label-custom">Location page Target Url Path</label>
                                                    <div class="col-md-12">
                                                        <input type="link" class="form-control form-input-custom" placeholder="Enter Location page Target Url Path">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 pad-bot-30">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-12 form-label-custom">Location Page Request Url Path</label>
                                                    <div class="col-md-12">
                                                        <input type="link" class="form-control form-input-custom" placeholder="Enter Location Page Request Url Path">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 pad-bot-30">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-success form-btn-custom">Save Url</button>
                                            </div>                                            
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card dasboard-card2">
                            <div class="card-header blue-bg">
                                <h4 class="m-b-0 text-white">Edit Payment Information</h4>
                            </div>
                            <div class="card-body">
                                <form action="#" class="form-horizontal">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-4 pad-bot-30">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-12 form-label-custom">Name</label>
                                                    <div class="col-md-12">
                                                        <input type="link" class="form-control form-input-custom" placeholder="Enter Name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 pad-bot-30">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-12 form-label-custom">Email</label>
                                                    <div class="col-md-12">
                                                        <input type="email" class="form-control form-input-custom" placeholder="Enter Email">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-success form-btn-custom">Save Payment</button>
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