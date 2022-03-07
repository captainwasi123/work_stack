<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class webController extends Controller
{
    //
    function index(){

    	return view('web.index');
    }

  
    function services(){

    	return view('web.services');
    }
    function comparisontable(){

        return view('web.comparison-table');
    }
    function paymentoption(){

        return view('web.payment-option');
    }
    function thankyoubooking(){

        return view('web.thank-you-booking');
    }
    function orderpage(){

        return view('web.order-page');
    }
    function pricingpackage(){

        return view('web.pricing-package');
    }
    function myaccount(){

        return view('web.my-account');
    }
}
