<!DOCTYPE html>
<html lang="en">

<head>
    {{-- Import main --}}
    @include('assets.main')
    <title>@yield('title')</title>

    {{-- Link css --}}
    <link rel="stylesheet" href="{{ asset('/css/register.css') }}">

    {{-- Syle --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oxygen');

        * {
            font-family: 'Oxygen'
        }
    </style>
</head>

<body>

{{-- Error in case one of the fields in the from was invalid when they subbmited it --}}
    @if ($errors->any())
        <div class="border-0 m-auto p-0">
            <ul class="border-0 m-auto p-0">
                @foreach ($errors->all() as $error)
                    @if (Str::contains($error, ['2006']))
                        <li class="list-group-item list-group-item-danger border-0 mp-0">You need to be at least 16 years
                            old to make an account</li>
                    @else
                        <li class="list-group-item list-group-item-danger border-0 mp-0">{{ $error }}</li>
                    @endif
                @endforeach
            </ul>
        </div>
    @endif
{{-- Code inspired from the official Laravel documentation https://laravel.com/docs/9.x/validation --}}

    @include('assets.common.navbar')

    {{-- Main container --}}
    <div class="maincontainer">
        <h1 name="h1customerRegister">Register</h1>
        {{-- Form container --}}
        <div class="formContainerRegister">

            {{-- Form --}}
            <form action="{{ asset('register') }} " method="post">
                {{ csrf_field() }}

                {{-- Name container --}}
                <div class="nameContainer">
                    {{-- FirstName Container --}}
                    <div class="firstNameContainer">
                        <label for="firstName">First Name: </label>
                        <input type="text" name="firstName" id="firstName" value="{{ old('firstName') }}" required>
                    </div>

                    {{-- Surname container --}}
                    <div class="surnameContainer">
                        <label for="surname">Surname: </label>
                        <input type="text" name="surname" id="surname" value="{{ old('surname') }}" required>
                    </div>
                </div>

                {{-- Address container --}}
                <div class="addressContainer">
                    <label for="address">Address:</label>
                    <input type="text" name="address" id="address" value="{{ old('address') }}" required>
                </div>

                {{-- Postcode Container --}}
                <div class="postcodeContainer">
                    <label for="postCode">PostCode: </label>
                    <input type="text" name="postCode" id="postCode" value="{{ old('postCode') }}" required>
                </div>

                {{-- Gender container --}}
                <div class="genderContainer">
                    <label for="gender">Gender:</label>
                    <select name="gender" id="gender" value="{{ old('gender') }}" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>

                {{-- Date Of Birth --}}
                <div class="dateOfBirthContainer">
                    <label for="dateOfBirth">Date Of Birth:</label>
                    <input type="date" name="dateOfBirth" id="dateOfBirth" value="{{ old('dateOfBirth') }}" required>
                </div>

                {{-- Email container --}}
                <div class="emailContainer">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required>
                </div>

                {{-- Password container --}}
                <div class="passwordContainer">
                    <label for="password">Password:</label>
                    <input placeholder="Min length: 8" type="password" name="password" id="password" required>
                </div>

                {{-- ConfirmPassword --}}
                <div class="confirmPasswordContainer">
                    <label for="confirmPsasword">Confirm Password:</label>
                    <input placeholder="Min length: 8" type="password" name="confirmPassword" id="confirmPassword"
                        required>
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
