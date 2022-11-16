
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Import main -->
   @include('assets.main')

<title>@yield('title')</title>
<link rel="stylesheet" type="text/css" href="/css/about.css">
  
  
</head>

<html>
<body>

  <!-- Import header -->
  @include('assets.common.navbar')

  <!--<div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-6">About-Us</h1> 
  </div> -->

  <!-- Insert About body here -->
 <div class="coontainer-about-us">  
<h1> About Us</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
</div>
<div class="container-2">
  <!-- Import footer -->
  @include('assets.common.footer')
  </div>
</body>
</html>
