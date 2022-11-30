<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Import main -->
  <link rel="stylesheet" href="/Website/public/css/contact.css">
  @include('assets.main')

  <style>
        @import url('https://fonts.googleapis.com/css2?family=Oxygen');

        * {font-family: 'Oxygen' }
  </style>

  <!-- social media buttons link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>@yield('title')</title>
  <link rel="stylesheet" type="text/css" href="/css/contact.css">


</head>

<html>

<body>

  <!-- Import header -->
  @include('assets.common.navbar')

  

  <!-- Insert ContactUs body here -->
  <section class = "container_contact_us">
  <h1> Contact Us </h1>

  <section class="container-contact">
  <!-- Links to the social media pages -->

  <div class= "contactus_col1">
    <h3> Our Social Media</h3>
    <a href= "https://www.instagram.com/?hl=en" class= "fa fa-instagram"> </a>
    <a href= "https://twitter.com/i/flow/login" class= "fa fa-twitter"> </a>
    <a href= "https://en-gb.facebook.com/login.php" class= "fa fa-facebook"> </a>
    <a href= "https://www.youtube.com/" class= "fa fa-youtube"> </a>
    <a href="mailto: astondirect@outlook.com" class= "fa fa-email"></a>
    
  </div>

    <div class= "contactus_col2">

        <form action="connect.plade.php" method="post" class="form" id="form" enctype="multipart/form-data">
          <h3> Get in Touch! </h3>
            <label for="name"> Name: </label><br>
            <input type="text" id="firstname" name="firstname" placeholder="Name"><br>
            <label for="surname"> Surname: </label><br>
            <input type="text" id="lastname" name="lastname" placeholder="Surname"><br>
            <label for="email"> Email: </label><br>
            <input type="email" id="email" name="email" placeholder="Email"><br>
            <label for="product">What is the subject of your query?</label><br>
            <textarea id="text" name="text" rows="1" cols="30" placeholder="Subject"></textarea><br>
            <label for="text"> Please write your query:</label><br>
            <textarea id="text" name="text" rows="6" cols="55" placeholder="Write your query..."></textarea><br> 
<div class="su">
        <input type="submit" value="Submit">
</div>
</form>

</div>

</section>
</section>





  <div class="container-2">
    <!-- Import footer -->
    @include('assets.common.footer')
  </div>
</body>

</html>