<!DOCTYPE html>
<html lang="en">
<head>
    {{-- Import main --}}
    @include('assets.main')
    <title>@yield('title')</title>

    {{-- Link css --}}
    <link rel="stylesheet" href="{{asset('/css/register.css')}}">

    {{-- Syle --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oxygen');

        * { font-family: 'Oxygen'}
    </style>

</head>
<body>
    @include('assets.common.navbar')

   

   

        {{-- Main container --}}
        <div class="container">
            <h1 name ="h1customerRegister">Register</h1>
            {{-- Form container --}}
            <div class="formContainerRegister">

                <form action="#" method="post">

                    {{-- Name container --}}
                    <div class="nameContainer">
                        {{-- FirstName Container --}}
                        <div class="firstNameContainer">
                            <h3>First Name:</h3>
                            <input type="text" name="customerFirstName" id="CustomerFirstName">

                        </div>

                        {{-- Surname container --}}
                        <div class="surnameContainer">
                            <h3>Surname:</h3>
                            <input type="text" name="customerSurname" id="customerSurname">
                        </div>
                    </div>

                    {{-- Address container --}}
                    <div class="addressContainer">
                        <h3>Address:</h3>
                        <input type="text" name="customerAddress" id="customerAddress">
                    </div>

                    {{-- Postcode Container --}}
                    <div class="postcodeContainer">
                        <h3>Postcode</h3>
                        <input type="text" name="customerPostcode" id="customerPostcode">
                    </div>

                    {{-- Gender container --}}
                    <div class="genderContainer">
                        <h3>Gender:</h3>
                        <select name="customerGender" id="customerGender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>

                    {{-- Date Of Birth --}}
                    <div class="dateOfBirthContainer">
                        <h3>Date Of Birth</h3>
                        <input type="date" name="customerDateOfBirth" id="customerDateOfBirth">
                    </div>
                    
                    {{-- Email container --}}
                    <div class="emailContainer">
                        <h3>Email: </h3>
                        <input type="email" name="customerEmail" id="customerEmail">
                    </div>

                    {{-- Password container --}}
                    <div class="passwordContainer">
                        <h3>Password: </h3>
                        <input type="password" name="customerPassword" id="customerPassword">
                    </div>

                    

                    {{-- ConfirmPassword --}}
                    <div class="confirmPasswordContainer">
                        <h3>Confirm Password</h3>
                        <input type="password" name="confirmPassword" id="confirmPassword">
                    </div>

                    {{-- Submit Button Conainter --}}
                    <div class="submitButtonContainer">
                        <button type="submit" name="btnSubmit">Register</button>
                    </div>

                </form>

            </div>
        
    </div>

    @include('assets.common.footer')
</body>
</html>