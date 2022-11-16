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

    <script>
        var passwordMatch = function() {
            if (document.getElementById('customerPassword').value != document.getElementById('confirmPassword').value){
                alert("Passwords do not match!");
            }
        }
    </script>

</head>
<body>
    @include('assets.common.navbar')

   

   

        {{-- Main container --}}
        <div class="maincontainer">
            <h1 name ="h1customerRegister">Register</h1>
            {{-- Form container --}}
            <div class="formContainerRegister">

                {{-- --}}
                <form action="{{asset('register')}} " method="post">
                {{ csrf_field() }}

                    {{-- Name container --}}
                    <div class="nameContainer">
                        {{-- FirstName Container --}}
                        <div class="firstNameContainer">
                            <label for="customerFirstName">First Name: </label>
                            <input type="text" name="customerFirstName" id="CustomerFirstName" required>
                        </div>

                        {{-- Surname container --}}
                        <div class="surnameContainer">
                            <label for="customerSurname">Surname: </label>
                            <input type="text" name="customerSurname" id="customerSurname" required>
                        </div>
                    </div>

                    {{-- Address container --}}
                    <div class="addressContainer">
                        <label for="customerAddress">Address:</label>
                        <input type="text" name="customerAddress" id="customerAddress" required>
                    </div>

                    {{-- Postcode Container --}}
                    <div class="postcodeContainer">
                        <label for="customerPostcode">PostCode: </label>
                        <input type="text" name="customerPostcode" id="customerPostcode" required>
                    </div>

                    {{-- Gender container --}}
                    <div class="genderContainer">
                        <label for="customerGneder">Gender:</label>
                        <select name="customerGender" id="customerGender" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>

                    {{-- Date Of Birth --}}
                    <div class="dateOfBirthContainer">
                        <label for="customerDateOfBirth">Date Of Birth:</label>
                        <input type="date" name="customerDateOfBirth" id="customerDateOfBirth" required>
                    </div>
                    
                    {{-- Email container --}}
                    <div class="emailContainer">
                        <label for="customerEmail">Email:</label>
                        <input type="email" name="customerEmail" id="customerEmail" required>
                    </div>

                    {{-- Password container --}}
                    <div class="passwordContainer">
                        <label for="customerPassowrd">Password:</label>
                        <input type="password" name="customerPassword" id="customerPassword" required>
                    </div>

                    {{-- ConfirmPassword --}}
                    <div class="confirmPasswordContainer">
                        <label for="confirmPsasword">Confirm Password:</label>
                        <input type="password" name="confirmPassword" id="confirmPassword" required>
                    </div>

                    {{-- Submit Button Conainter --}}
                    <div class="submitButtonContainer">
                        <button type="submit" name="btnSubmit" onclick='passwordMatch();'>Register</button>
                    </div>

                </form>

            </div>
        
    </div>

    @include('assets.common.footer')
</body>
</html>