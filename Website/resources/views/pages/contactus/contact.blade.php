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
  <div class = "container-contact-us">
<h1> Contact Us </h1>
<!-- Links to the social media pages -->

  <div class="row">
    <div class="column">
<div class= "links">
  <h2>Contact Information</h2>
  </div>
</div>

      <div class="column">
    <div class= "contactf">
      <h2>Conact Form</h2>
</div>
    
    
    <div class="column">
  <div class= "location">
    <h2>Location</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9718.325760104139!2d-1.8882478!3d52.4867138!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9a670ba18e08a084!2sAston%20University!5e0!3m2!1sen!2suk!4v1669637789854!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</div>


  <div class="container-2">
    <!-- Import footer -->
    @include('assets.common.footer')
  </div>
</body>

</html>