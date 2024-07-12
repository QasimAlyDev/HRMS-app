<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(Request $request){
        return view('login');
    }
    public function forget_password(Request $request){
        echo "forget password";
    }
}
