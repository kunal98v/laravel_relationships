<?php

namespace App\Http\Controllers;

use App\Models\Mobile;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function add_customer(){
        $mobile = new Mobile();
        $mobile->model = "LG800";
    
        $customer = new Customer();
        $customer->name = "Ritik";

        $customer->save();
        $customer->mobile()->save($mobile);

    }

    public function show_mobile($id){           //Find mobile by customer id
        $mobile = Customer::find($id)->mobile;
        return $mobile;
    }

    public function show_customer($id){
        $customer = Mobile::find($id)->customer;       //Find customer by mobile id
        return $customer;

    }
}


