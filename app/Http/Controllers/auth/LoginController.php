<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
   
    public function login(){
        $loginData = $this->validate(request(),[
            'email'=>'required',
         'password'=>'required',
        ]);
    
        if(auth()->attempt($loginData)) {
            return view('home');      
        };
        return back();
    }


}
