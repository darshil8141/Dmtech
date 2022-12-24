<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistraionController extends Controller
{
    public function index()
    {
        return view('form');
    }
    public function register(Request $request)
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
