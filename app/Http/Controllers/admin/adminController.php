<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminController extends Controller
{
    //
    function index(){

    	return view('admin.index');
    }
    function editprofile(){

    	return view('admin.edit-profile');
    }
    function allproducts(){

    	return view('admin.all-products');
    }
    function transaction(){

    	return view('admin.transaction');
    }
    function orderhistory(){

    	return view('admin.order-history');
    }
    function manageshipping(){

    	return view('admin.manage-shipping');
    }
    function addproduct(){

    	return view('admin.add-product');
    }
    function createattribute(){

    	return view('admin.create-attribute');
    }
    
}
