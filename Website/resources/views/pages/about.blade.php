<head>

  <!-- Import main -->
  @include('assets.main')

  <title>@yield('title')</title>
  
 
</head>

<body>

  <!-- Import header -->
  @include('assets.common.navbar')

  <div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-6">About-Us</h1>
  </div>

  <!-- Insert Home body here -->
  <link rel="stylesheet" type="text/css" href="/css/about.css" />
    <title> About Us</title>
<body>
    <?php
    inlcude("nav.php");
    ?>
    <div class="container">
    <div class="box">
<h1> About Us</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
</div>
</div>
</body>
</html>
  <!-- Import footer -->
  @include('assets.common.footer')

</body>
</html>
