@extends('seller.includes.master')
@section('title', 'Create Attribute | seller')
@section('addStyle')

@endsection
@section('content')

<div class="page-wrapper pad-top-70">
           <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="page-breadcum">
                        <h3 class="no-margin">Manage Configurable Product's Attribute</h3>
                    </div>
                </div>
            </div>

            <div class="container-fluid pad-top-30">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card dasboard-card2">
                            <div class="card-header blue-bg">
                                <h4 class="m-b-0 text-white">Create Attribute for Configurable Products</h4>
                            </div>
                            <div class="card-body">
                                <form action="#" class="form-horizontal">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-4 pad-bot-30">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-12 form-label-custom">Attribute Set:</label>
                                                    <div class="col-md-12">
                                                        <input type="text" class="form-control form-input-custom" placeholder="Enter Attribute Set">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 pad-bot-30">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-12 form-label-custom">Attribute Code:</label>
                                                    <div class="col-md-12">
                                                        <input type="text" class="form-control form-input-custom" placeholder="Enter Attribute Code">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 pad-bot-30">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-12 form-label-custom">Attribute Label for seller Store View:</label>
                                                    <div class="col-md-12">
                                                        <input type="text" class="form-control form-input-custom" placeholder="Enter Attribute Label for seller Store View">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 pad-bot-30">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-12 form-label-custom">Attribute Label for Default Store View Store View:</label>
                                                    <div class="col-md-12">
                                                        <input type="text" class="form-control form-input-custom" placeholder="Enter Attribute Label for Default Store View Store View">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 pad-bot-30">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-12 form-label-custom">Attribute Label for RWD Store View:</label>
                                                    <div class="col-md-12">
                                                        <input type="text" class="form-control form-input-custom" placeholder="Enter Attribute Label for RWD Store View">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 pad-bot-30">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-12 form-label-custom">Attribute Label for RWD Theme View Store View:</label>
                                                    <div class="col-md-12">
                                                        <input type="text" class="form-control form-input-custom" placeholder="Enter Attribute Label for RWD Theme View Store View">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 pad-bot-30">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-12 form-label-custom">Values Required:</label>
                                                    <div class="col-md-12">
                                                        <input type="text" class="form-control form-input-custom" placeholder="Enter Values Required">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-success form-btn-custom">Save Attribute</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                         <div class="card dasboard-card2">
                            <div class="card-header blue-bg">
                                <h4 class="m-b-0 text-white">Manage Options (values of your attribute)</h4>
                            </div>
                            <div class="card-body">
                                <form action="#" class="form-horizontal">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-lg-1 col-md-2 col-4 pad-bot-20">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-12 form-label-custom">seller</label>
                                                    <div class="col-md-12">
                                                        <input type="text" class="form-control form-input-custom" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-5 pad-bot-20">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-12 form-label-custom">Default View</label>
                                                    <div class="col-md-12">
                                                        <input type="text" class="form-control form-input-custom" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-3 pad-bot-20">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-12 form-label-custom">RWD</label>
                                                    <div class="col-md-12">
                                                        <input type="text" class="form-control form-input-custom" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-4 pad-bot-20">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-12 form-label-custom">RWD View </label>
                                                    <div class="col-md-12">
                                                        <input type="text" class="form-control form-input-custom" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-5 pad-bot-20">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-12 form-label-custom">Position</label>
                                                    <div class="col-md-12">
                                                        <input type="text" class="form-control form-input-custom" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-3 pad-bot-20">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-12 form-label-custom">Is</label>
                                                    <div class="col-md-12">
                                                        <input type="checkbox" id="vehicle1" name="vehicle1">
                                                        <label for="vehicle1"> </label><br>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-6 col-12 ">
                                                <div class="form-group row">
                                                    <button type="submit" class="btn btn-success yellow-bg form-att-btn-custom">App Option</button>
                                                    <button type="submit" class="btn btn-success form-att-btn-custom">Delete</button>
                                                </div>
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
