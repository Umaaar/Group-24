<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    protected function register(Request $request){
        try{
            $firstName = $request['customerFirstName'];
            $firstName = htmlspecialchars($firstName);
            $firstName = trim($firstName);


            $surname = $request['customerSurname'];
            $surname = htmlspecialchars($surname);
            $surname = trim($surname);


            $address = $request['customerAddress'];
            $address = strval($address);
            $address = htmlspecialchars($address);
            $address = trim($address);

            $postcode = $request['customerPostcode'];
            $postcode = htmlspecialchars($postcode);
            $postcode = trim($postcode);

            $gender = $request['customerGender'];
            $gender = htmlspecialchars($gender);
            $gender = trim($gender);

            $DateOfBirth = htmlspecialchars($request['customerDateOfBirth']);


            $email = $request['customerEmail'];
            $password = Hash::make($request['customerPassword']);

            session(['firstname' => $firstName]);
            session(['surname' => $surname]);
            session(['address' => $address]);
            session(['postcode' => $postcode]);
            session(['gender' => $gender]);
            session(['dateofbirth' => $DateOfBirth]);
            

            

            users::create([
                'FirstName' => $firstName,
                'Surname' => $surname,
                'Address' => $address,
                'PostCode' => $postcode,
                'Gender' => $gender,
                'DateOfBirth' =>$DateOfBirth,
                'Email' => $email,
                'Password' => $password,
            ]);

            
           



            return redirect('/login');

        } catch(exception $e){
            echo "It seems there was a problem while trying to create your account " . $e;
        }

       }
}
