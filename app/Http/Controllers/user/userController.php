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
    function smiles(){

        return view('user.smiles');
    }
    function myorderupcoming(){

        return view('user.my-order-upcoming');
    }
    function myorderdeliver(){

        return view('user.my-order-deliver');
    }


}
