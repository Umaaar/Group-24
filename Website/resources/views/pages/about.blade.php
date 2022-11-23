<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Import main -->
  <link rel="stylesheet" href="/Website/public/css/about.css">
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
<<<<<<< HEAD
  <div class="coontainer-about-us">
    <div class="container-sub-about">
    <img src="{{ asset('\Website\resources\views\pages\logo.jpg') }}" alt="description of myimage" style="width:4%;">
      <h1> About Us</h1>
    </div>


    <div class="container-sub-about">
     

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
        pariatur.
      </p>
    </div>
=======
 <div class="coontainer-about-us">  
  <div class="container-sub-about"> <img src="C:\xampp\htdocs\github\Group-24\Website\logo.png" alt=""></div>
  <div class="container-sub-about">
  <h1> About Us</h1>
<p> AstonDirect is an e-commerce platform made by students for students. We sell great quality sports clothing at affordable prices perfect for all students on a tight budget. Our modern look reflects our emphasis on being ethical and sustainable durin development of our products. We are proud to be able to provide such a service and hope all you guys are as excited about AstonDirect as we are.</p>
</div>
>>>>>>> 429e11782fd2e13ee0ea5ee54eeee8b8e5d0fc00
  </div>


  <div class="container-2">
    <!-- Import footer -->
    @include('assets.common.footer')
  </div>
</body>

</html>