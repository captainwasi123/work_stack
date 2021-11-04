<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class webController extends Controller
{
    //
    function index(){

    	return view('web.index');
    }
    function modal(){

    	return view('web.modal');
    }
    function services(){

    	return view('web.services');
    }
    function comparisontable(){

        return view('web.comparison-table');
    }
}
