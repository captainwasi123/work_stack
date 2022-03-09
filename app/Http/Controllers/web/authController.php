<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;


class authController extends Controller
{
     function loginAttempt(Request $req){
      
        $data = $req->all();
        if(Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'status' => 1]))
        {
            if(Auth::user()->userType == '1'){
                return redirect(route('user.dashboard'))->with('success', 'Logged in Successfully');
            }else{
                return redirect(route('seller.dashboard'))->with('success', 'Logged in Successfully');
            }

        }
        else
        {
            return redirect()->back()->with('error', 'Email Or Password is incorrect, please try again');
        }
    }
}
