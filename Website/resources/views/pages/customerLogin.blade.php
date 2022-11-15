<!DOCTYPE html>
<html lang="en">
<head>
    {{-- Import main --}}
    @include('assets.main')
    <title>@yield('title')</title>

    {{-- Link css --}}
    <link rel="stylesheet" href="{{asset('/css/login.css')}}">

    {{-- Syle --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oxygen');

        * { font-family: 'Oxygen'}
    </style>

</head>
<body>
    @include('assets.common.navbar')

   

   

        {{-- Main container --}}
        <div class="maincontainer">
            <h1 name ="customerLogin">Login</h1>
            {{-- Form container --}}
            <div class="formContainer">

                <form action="#" method="post">
                    {{-- Login container --}}
                    <div class="loginContainer">
                        <h3>Email: </h3>
                        <input type="email" name="customerEmail" id="customerEmail">
                    </div>

                    {{-- Password container --}}
                    <div class="passwordContainer">
                        <h3>Password: </h3>
                        <input type="password" name="customerPassword" id="customerPassword">
                    </div>

                    <div class="submitButtonContainer">
                        <button type="submit" name="btnSubmit">Log in</button>
                    </div>

                </form>

            </div>

            <a href="{{asset('/loginAdmin')}}">Are you part of staff?</a>
        
    </div>

    @include('assets.common.footer')
</body>
</html>