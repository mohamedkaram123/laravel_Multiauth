<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
class LoginController2 extends Controller
{
   
    public function login(){

        $loginData = $this->validate(request(),[
            'email'=>'required',
         'password'=>'required',
        ]);

  
        if(Auth::guard('user2')->attempt($loginData)) {
            return view('home');      
        };

        return back();

    }


}
