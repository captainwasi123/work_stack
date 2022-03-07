<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sellerController extends Controller
{
    //
    function index(){

    	return view('seller.index');
    }
    function editprofile(){

    	return view('seller.edit-profile');
    }
    function allproducts(){

    	return view('seller.all-products');
    }
    function transaction(){

    	return view('seller.transaction');
    }
    function orderhistory(){

    	return view('seller.order-history');
    }
    function manageshipping(){

    	return view('seller.manage-shipping');
    }
    function addproduct(){

    	return view('seller.add-product');
    }
    function createattribute(){

    	return view('seller.create-attribute');
    }
    
}
