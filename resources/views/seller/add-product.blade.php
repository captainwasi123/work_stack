@extends('seller.includes.master')
@section('title', 'Add Product | seller')
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
                                                        <select class="form-control form-input-custom">
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
                                                    <label class="control-label col-md-12 form-label-custom">Product Name:</label>
                                                    <div class="col-md-12">
                                                        <input type="text" class="form-control form-input-custom" placeholder="Enter Product Name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 pad-bot-30">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-12 form-label-custom">Product Category:</label>
                                                    <div class="col-md-12">
                                                        <select class="form-control form-input-custom">
                                                            <option value="">Electronics</option>
                                                            <option value="">IT</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 pad-bot-30">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-12 form-label-custom">Price ($)</label>
                                                    <div class="col-md-12">
                                                        <input type="number" class="form-control form-input-custom" placeholder="Enter Price">
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 pad-bot-30">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-12 form-label-custom">SKU</label>
                                                    <div class="col-md-12">
                                                        <input type="number" class="form-control form-input-custom" placeholder="Enter SKU">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 pad-bot-30">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-12 form-label-custom">Weight</label>
                                                    <div class="col-md-12">
                                                        <input type="number" class="form-control form-input-custom" placeholder="Enter Weight">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 pad-bot-30">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-12 form-label-custom">Special Price ($)</label>
                                                    <div class="col-md-12">
                                                        <input type="number" class="form-control form-input-custom" placeholder="Enter Special Price">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 pad-bot-30">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-12 form-label-custom">Special Price From</label>
                                                    <div class="col-md-12">
                                                        <input type="number" class="form-control form-input-custom" placeholder="Enter Special Price From">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 pad-bot-30">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-12 form-label-custom">Special Price To</label>
                                                    <div class="col-md-12">
                                                        <input type="number" class="form-control form-input-custom" placeholder="Enter Special Price To">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 pad-bot-30">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-12 form-label-custom">Stock</label>
                                                    <div class="col-md-12">
                                                        <input type="number" class="form-control form-input-custom" placeholder="Enter Stock">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 pad-bot-30">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-12 form-label-custom">Stock Availability:</label>
                                                    <div class="col-md-12">
                                                        <select class="form-control form-input-custom">
                                                            <option value="">In Stock</option>
                                                            <option value="">Out of Stock</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 pad-bot-30">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-12 form-label-custom">Visibility:</label>
                                                    <div class="col-md-12">
                                                        <select class="form-control form-input-custom">
                                                            <option value="">Visible</option>
                                                            <option value="">No Visible</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 pad-bot-30">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-12 form-label-custom">Tax Class:</label>
                                                    <div class="col-md-12">
                                                        <select class="form-control form-input-custom">
                                                            <option value="">Class</option>
                                                            <option value="">Class</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 pad-bot-30">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-12 form-label-custom">Product Images:</label>
                                                    <div class="col-md-12">
                                                         <input type="file" class="form-control form-file-custom" multiple>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 pad-bot-30">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-12 form-label-custom">Description:</label>
                                                    <div class="col-md-12">
                                                        <textarea class="form-control form-textarea-custom"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 pad-bot-30">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-12 form-label-custom">Short Description:</label>
                                                    <div class="col-md-12">
                                                        <textarea class="form-control form-textarea-custom"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-12 form-label-custom">Quantity:</label>
                                                    <div class="col-md-12">
                                                         <input type="number" class="form-control form-input-custom" placeholder="Enter Quantity">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-success form-btn-custom">Add Product</button>
                                            </div>                                            
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="card dasboard-card2">
                            <div class="card-header blue-bg">
                                <div class="card-actions">
                                    <a class="" data-action="collapse"><i class="ti-minus"></i></a>
                                    <a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
                                    <a class="btn-close" data-action="close"><i class="ti-close"></i></a>
                                </div>
                                <h4 class="card-title m-b-0">Related Products</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <h5>Related products are shown to customer in addition to the item the customer is looking out.</h5>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Name</th>
                                                    <th>Type</th>
                                                    <th>Attrib</th>
                                                    <th>Status</th>
                                                    <th>Visibility</th>
                                                    <th>SKU</th>
                                                    <th>Price</th>
                                                    <th>Position</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>123</td>
                                                    <td>Lorem ipsum</td>
                                                    <td>Simple</td>
                                                    <td>Default</td> 
                                                    <td>1</td> 
                                                    <td>4</td> 
                                                    <td>225</td>   
                                                    <td>$225</td>                                                        
                                                    <td style="padding: 5px 30px; width: 12%;">
                                                        <div class="form-group row">
                                                            <input type="number" class="form-control form-input-custom" placeholder="Enter Position">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>123</td>
                                                    <td>Lorem ipsum</td>
                                                    <td>Simple</td>
                                                    <td>Default</td> 
                                                    <td>1</td> 
                                                    <td>4</td> 
                                                    <td>225</td>   
                                                    <td>$225</td>                                                        
                                                    <td style="padding: 5px 30px; width: 12%;">
                                                        <div class="form-group row">
                                                            <input type="number" class="form-control form-input-custom" placeholder="Enter Position">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>                
                    </div>

                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="card dasboard-card2">
                            <div class="card-header blue-bg">
                                <div class="card-actions">
                                    <a class="" data-action="collapse"><i class="ti-minus"></i></a>
                                    <a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
                                    <a class="btn-close" data-action="close"><i class="ti-close"></i></a>
                                </div>
                                <h4 class="card-title m-b-0">Up-sells Products</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <h5>Up-sells products are shown to customer in addition to the item the customer is looking out.</h5>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Name</th>
                                                    <th>Type</th>
                                                    <th>Attrib</th>
                                                    <th>Status</th>
                                                    <th>Visibility</th>
                                                    <th>SKU</th>
                                                    <th>Price</th>
                                                    <th>Position</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>123</td>
                                                    <td>Lorem ipsum</td>
                                                    <td>Simple</td>
                                                    <td>Default</td> 
                                                    <td>1</td> 
                                                    <td>4</td> 
                                                    <td>225</td>   
                                                    <td>$225</td>                                                        
                                                    <td style="padding: 5px 30px; width: 12%;">
                                                        <div class="form-group row">
                                                            <input type="number" class="form-control form-input-custom" placeholder="Enter Position">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>123</td>
                                                    <td>Lorem ipsum</td>
                                                    <td>Simple</td>
                                                    <td>Default</td> 
                                                    <td>1</td> 
                                                    <td>4</td> 
                                                    <td>225</td>   
                                                    <td>$225</td>                                                        
                                                    <td style="padding: 5px 30px; width: 12%;">
                                                        <div class="form-group row">
                                                            <input type="number" class="form-control form-input-custom" placeholder="Enter Position">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>                
                    </div>

                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="card dasboard-card2">
                            <div class="card-header blue-bg">
                                <div class="card-actions">
                                    <a class="" data-action="collapse"><i class="ti-minus"></i></a>
                                    <a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
                                    <a class="btn-close" data-action="close"><i class="ti-close"></i></a>
                                </div>
                                <h4 class="card-title m-b-0">Cross-sells Products</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <h5>Cross-sells products are shown to customer in addition to the item the customer is looking out.</h5>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Name</th>
                                                    <th>Type</th>
                                                    <th>Attrib</th>
                                                    <th>Status</th>
                                                    <th>Visibility</th>
                                                    <th>SKU</th>
                                                    <th>Price</th>
                                                    <th>Position</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>123</td>
                                                    <td>Lorem ipsum</td>
                                                    <td>Simple</td>
                                                    <td>Default</td> 
                                                    <td>1</td> 
                                                    <td>4</td> 
                                                    <td>225</td>   
                                                    <td>$225</td>                                                        
                                                    <td style="padding: 5px 30px; width: 12%;">
                                                        <div class="form-group row">
                                                            <input type="number" class="form-control form-input-custom" placeholder="Enter Position">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>123</td>
                                                    <td>Lorem ipsum</td>
                                                    <td>Simple</td>
                                                    <td>Default</td> 
                                                    <td>1</td> 
                                                    <td>4</td> 
                                                    <td>225</td>   
                                                    <td>$225</td>                                                        
                                                    <td style="padding: 5px 30px; width: 12%;">
                                                        <div class="form-group row">
                                                            <input type="number" class="form-control form-input-custom" placeholder="Enter Position">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div> 


                         <div class="card dasboard-card2">
                            <div class="card-header blue-bg">
                                <h4 class="m-b-0 text-white">Meta Information</h4>
                            </div>
                            <div class="card-body">
                                <form action="#" class="form-horizontal">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-6 pad-bot-30">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-12 form-label-custom">Meta Title:</label>
                                                    <div class="col-md-12">
                                                        <input type="link" class="form-control form-input-custom" placeholder="Enter Meta Title">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 pad-bot-30">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-12 form-label-custom">Meta Keywords:</label>
                                                    <div class="col-md-12">
                                                        <input type="link" class="form-control form-input-custom" placeholder="Enter Meta Keywords">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 pad-bot-30">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-12 form-label-custom">Meta Description:</label>
                                                    <div class="col-md-12">
                                                        <textarea class="form-control form-textarea-custom">Enter Meta Description</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <hr>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-success form-btn-custom">Save</button>
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