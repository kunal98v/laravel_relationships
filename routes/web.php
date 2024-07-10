<?php

use App\Models\Mobile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MobileController;
use App\Http\Controllers\CustomerController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/add_customer',[CustomerController::class,'add_customer']);

Route::get('/show-mobile/{id}',[CustomerController::class,'show_mobile']);

Route::get('/show-customer/{id}',[CustomerController::class,'show_customer']);

Route::get('/add-mobile/{id}',[MobileController::class,'add_mobile']);


