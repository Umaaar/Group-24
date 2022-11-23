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
                'address' => 'required|string|max:50',
                'postCode' => 'required|string|max:10',
                'gender' => 'required|string|max:10',
                'dateOfBirth' => 'required|date|before_or_equal:2006/12/30',
                'email' => 'required|email|string|unique:users|max:100',
                'password' => 'required|min:8|max:128||regex:/^[a-zA-Z]+$/u',
                'confirmPassword' => 'required|same:password|max:100',
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
