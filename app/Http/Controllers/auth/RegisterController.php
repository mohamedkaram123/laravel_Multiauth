<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller{ 


public function register(){
    $datarigister = $this->validate(request(),[
                    'name' => 'required|string|max:255',
                    'email' => 'required|string|email|max:255|unique:users',
                    'password' => 'required|string|min:6|confirmed',
                ]);
                $datarigister['password'] = Hash::make($datarigister['password']);
                User::create($datarigister);
                return view("home");
}
}
