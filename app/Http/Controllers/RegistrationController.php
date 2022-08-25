<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;

class RegistrationController extends Controller
{
    public function index(){
return view ('form');
    }
    public function register(Request $request)
    {
       echo "<pre>";
       print_r ($request->all());
       $customer = new customer;
       $customer-> name= $request['firstname'];
       $customer-> email= $request['email'];
       $customer-> gender= $request['gender'];
       $customer-> address= $request['address'];
       $customer-> state= $request['state'];
       $customer-> dob= $request['dob'];
       $customer-> password = md5 ($request['password']);
    $customer->save();
    }

}