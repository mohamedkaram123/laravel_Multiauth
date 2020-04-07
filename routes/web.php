<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::namespace('auth')->group(function () {
    Route::post('/logininfo','LoginController@login');

    Route::post('/registerinfo','RegisterController@register');
    
    

});

Route::namespace('users')->group(function () {
    Route::post('/logininfo2','LoginController2@login');

    Route::post('/registerinfo2','RegisterController2@register');
    
    

});

Route::get('/login', function () {
    return view('loginfirstuser.login');
});
Route::get('/register', function () {
    return view('loginfirstuser.register');
});


Route::get('/login2', function () {
    return view('loginfirstuser2.login');
});
Route::get('/register2', function () {
    return view('loginfirstuser2.register');
});



Route::get('/home', 'HomeController@index')->name('home');

