<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Carbon\Carbon;
=======
use App\Models\User;
>>>>>>> 9eef4b3353b1fa8589b10532acf2afd9b1b903a0

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

    // function signup(){

    //     return view('web.includes.modal');
    // }


    // function register(Request $request){
    //     $request->validate([
    //           'email' => 'required|unique:tbl_users_info',
    //           'password' => '|required_with:confirm_password|same:confirm_password',
    //           'confirm_password' => 'required'
    //       ]);

    //     $data = $request->all();
    //     $r = new User;
    //     $r->first_name = $data['first_name'];
    //     $r->last_name = $data['last_name'];
    //     $r->email = $data['email'];
    //     $r->phone = $data['phone'];
    //     $r->password=bcrypt($request->password);
    //     $r->address = $data['address'];
    //     $r->userType = $data['userType'];
    //     $r->save();
        
    //     return redirect()->back()->with('success', 'New User Added!');

    // }

    function registerSubmit(Request $request){
        // $validated = $request->validate([
        //     'email' => 'required|unique:tbl_users_info|max:255',
        //     'password' => 'required|confirmed|min:6',
        // ]);


        $data = $request->all();   
        User::addUser($data);
        return redirect()->back()->with('success', 'Account Created.');
    }
}
