<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        return view ('registraion');
    }
    public function registraion (Request $request)
    {
        $request->validate(
            [
                'Name'      =>'required',
                'Email'     =>'required|email',
                'password'  =>'required',
                'password_confimation' =>'required|same:password'
            ]
        );
        echo"<pre>";
        print_r($request->all());

    }
}
