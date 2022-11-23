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
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    @include('assets.common.navbar')

        {{-- Main container --}}
        <div class="maincontainer">
            <h1 name ="customerLogin">Login</h1>
            {{-- Form container --}}
            <div class="formContainer">

                <form action="{{ asset('login')}}" method="post">
                    {{ csrf_field() }}
                    {{-- Login container --}}
                    <div class="loginContainer">
                        <label for="customerEmail">Email:</label>
                        <input type="email" name="email" id="email">
                    </div>

                    {{-- Password container --}}
                    <div class="passwordContainer">
                        <label for="customerPassword">Password:</label>
                        <input type="password" name="password" id="password">
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