<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User2;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;


class RegisterController2 extends Controller{ 


public function register(){
    $datarigister = $this->validate(request(),[
                    'name' => 'required|string|max:255',
                    'email' => 'required|string|email|max:255|unique:users',
                    'password' => 'required|string|min:6|confirmed',
                ]);
                $datarigister['password'] = Hash::make($datarigister['password']);
                User2::create($datarigister);
                return view("home");
}
}
