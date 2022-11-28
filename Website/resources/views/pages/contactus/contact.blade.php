<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Import main -->
  <link rel="stylesheet" href="/Website/public/css/contact.css">
  @include('assets.main')

  <title>@yield('title')</title>
  <link rel="stylesheet" type="text/css" href="/css/contact.css">


</head>

<html>

<body>

  <!-- Import header -->
  @include('assets.common.navbar')

  

  <!-- Insert ContactUs body here -->
  <div class = "container_contact_us">
<h1> Contact Us </h1>
<!-- Links to the social media pages -->

  <div class= "contactus_col1">
    <p><a href="https://www.instagram.com/?hl=en"> Instagram </a></p>
    <p><a href="https://twitter.com/i/flow/login"> Twitter </a></p>
    <p><a href="https://en-gb.facebook.com/login.php"> Facebook </a></p>
    <p><a href="https://www.youtube.com/"> Youtube </a></p>

   
</div>

    <div class= "contactus_col2">
        <a href="mailto: astondirect@outlook.com"> Send Query </a>
</div>

  <div class= "contactus_col3">
<h1>Rabia pagal hy </h1>
</div>
</div>






  <div class="container-2">
    <!-- Import footer -->
    @include('assets.common.footer')
  </div>
</body>

</html>