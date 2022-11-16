<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Validator;

class AdminLoginController extends Controller
{
    protected function login(Request $request)
    {
        
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        if(Auth::guard('webadmins')->attempt($credentials)) {

             return redirect('/admin');

        }else{
            return redirect('/register');
        }
    }
       
}
