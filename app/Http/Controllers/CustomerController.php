<?php

namespace App\Http\Controllers;

use App\Models\Mobile;
use App\Models\Customer;
use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

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
        $customer = Customer::find($id);
        return $customer->mobile;
    }

    public function show_customer($id){
        $customer = Mobile::find($id)->customer;       //Find customer by mobile id
        return $customer;

    }

    public function sendWelcomeMail(Request $request){
        Log::info("in");
        // return "hello";
        $name = 'DEfault';
        $name  = $request->name;
        
        $sent = Mail::to("aditya57@fyntune.com")->send(new WelcomeMail($name));

        if ($sent){
            return response()->json(['status' => true, 'message' => 'Email sent Successfully !']);
        } else {
            return response()->json(['status' => false, 'message' => 'Email not sent !']);

        }
    }
}   


