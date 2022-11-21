<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator;

class RegisterController extends Controller
{


    protected function register(Request $request){

            $validated = $request->validate([
                'firstName' => 'required|string|max:50',
                'surname' => 'required|string|max:50',
                'address' => 'required|max:50',
                'postCode' => 'required|max:10',
                'gender' => 'required|string|max:6',
                'dateOfBirth' => 'required|max:10',
                'email' => 'required|email|unique:users|max:30',
                'password' => 'required',
                'confirmPassword' => 'required|same:password',
            ]);

            session(['firstname' => $validated['firstName']]);
            session(['surname' => $validated['surname']]);
            session(['address' => $validated['address']]);
            session(['postcode' => $validated['postCode']]);
            session(['gender' => $validated['gender']]);
            session(['dateofbirth' =>$validated['dateOfBirth']]);
            
            

            

            users::create([
                'firstName' => $validated['firstName'],
                'surname' => $validated['surname'],
                'address' => $validated['address'],
                'postCode' => $validated['postCode'],
                'gender' => $validated['gender'],
                'dateOfBirth' =>$validated['dateOfBirth'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
            ]);

            
           



            return redirect('/login');

       }
}
