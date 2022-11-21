<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Validator;

class LoginController extends Controller
{
    protected function login(Request $request)
    {
        
        $validated = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($validated)) {
            
            $user = DB::table('users')->where('email',$validated['email'])->first();

            session(['firstname' => $user->firstName]);
            session(['surname' => $user->surname]);
            session(['address' => $user->address]);
            session(['postcode' => $user->postCode]);
            session(['gender' => $user->gender]);
            session(['dateofbirth' =>$user->dateOfBirth]);


            return redirect('/');
        }else{
            return back()->withErrors(['error' => 'The email or password are incorrect!']);
        }

       
        

    }
}
