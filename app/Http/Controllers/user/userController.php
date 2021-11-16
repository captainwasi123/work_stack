<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userController extends Controller
{
    //
    function index(){

    	return view('user.index');
    }
    function personaldetails(){

    	return view('user.personal-details');
    }
    function resetpassword(){

    	return view('user.reset-password');
    }
    function transaction(){

    	return view('user.transaction');
    }
    function favorites(){

    	return view('user.favorites');
    }
    function messages(){

        return view('user.messages');
    }

}
