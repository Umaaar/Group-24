<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Basket;
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

            session(['firstName' => $user->firstName]);
            session(['surname' => $user->surname]);
            session(['address' => $user->address]);
            session(['postCode' => $user->postCode]);
            session(['gender' => $user->gender]);
            session(['dateOfBirth' =>$user->dateOfBirth]);

            $tryBasket = Basket::where('userfk', $user->userid)->first();

            if($tryBasket == null) {
                $basket = new Basket;
                $basket->basketid = $user->userid;
                $basket->userfk = $user->userid;
                $basket->save();
            }


            return redirect('/');
        }else{
            session(['message' => 'Invalid login details']);
            return back();
        }
    }

    public function logOut(){
        Auth::logout();
        session()->flush();
        return redirect('/');
    }
}
