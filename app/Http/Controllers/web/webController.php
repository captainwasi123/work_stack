<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;

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

    // function registerSubmit(Request $request){
    //     $validated = $request->validate([
    //         'email' => 'required|unique:tbl_users_info|max:255',
    //         'password' => 'required|confirmed|min:6',
    //     ]);


    //     $data = $request->all();
    //     User::addUser($data);
    //     return redirect()->back()->with('success', 'Account Created.');
    // }


    function registerSubmit(Request $request){
    	$data = $request->all();
         $user = User::where('email', $data['email'])->count();
            	
        if($user != '0'){

                return 'exist';

        }else if($data['password'] != $data['confirmation_password']){

    	    return 'nomatch';

    	}else{

                if(strlen($data['password']) < 6){

                    return 'strong';

                }else{

                    User::addUser($data);
                    return 'success';

                }


        }
    }


//     function registerSubmit(Request $request)
//     {
//         $validator = Validator::make($request->all(), [
//             'name' => 'required',
//             'email' => 'required|email|unique:users,email',   // required and email format validation
//             'password' => 'required|min:8', // required and number field validation
//             'confirm_password' => 'required|same:password',

//         ]); // create the validations
//         if ($validator->fails())   //check all validations are fine, if not then redirect and show error messages
//         {
//             return response()->json($validator->errors(),422);
//             // validation failed return back to form

//         } else {
//             //validations are passed, save new user in database
//             $User = new User;
//             $User->name = $request->name;
//             $User->email = $request->email;
//             $User->password = bcrypt($request->password);
//             $User->save();

//             return response()->json(["status"=>true,"msg"=>"You have successfully registered, Login to access your dashboard","redirect_location"=>url("login")]);

//         }


// }
}
