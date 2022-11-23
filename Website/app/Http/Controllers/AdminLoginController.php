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
        
        $validated = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        if(Auth::guard('webadmins')->attempt($validated)) {

            $user = DB::table('admins')->where('email',$validated['email'])->first();
            session(['name' => $user->name]);
             return redirect('/admin');

        }else{
            return back()->withErrors(['error' => 'The email or password are incorrect!']);
        }
    }
       
}
