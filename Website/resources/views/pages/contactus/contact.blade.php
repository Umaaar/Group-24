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

  <script>
    function sayAlert(){
      alert("Form subbmited. Thank you!");
      window.location.reload();
    }
  </script>


</head>

<html>

<body>

  <!-- Import header -->
  @include('assets.common.navbar')

  <div class="bg-light">
    <div class="p-lg-5 col-md-5 mx-auto">
      <div class="text-center">
          <h1>Contact us</h1>
          <p class="text-muted lead">You can fill this in for any enquiries you may have</p>
            <!-- <a href="/menshoes" class="btn btn-outline-secondary my-2">Shoes</a>
            <a href="/men-accessories" class="btn btn-outline-secondary my-2">Clothes</a>
            <a href="/men-bags" class="btn btn-outline-secondary my-2">Trousers</a> -->

  
          </div>
        </div>
      </div>
  

  

  <!-- Insert ContactUs body here -->

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

        <form method="" class="form" action="" onsubmit="sayAlert()">
          <h3> Get in Touch! </h3>
            <label for="name"> Name: </label><br>
            <input type="text" name="firstname" placeholder="Name" required><br>
            <label for="surname"> Surname: </label><br>
            <input type="text" name="lastname" placeholder="Surname" required><br>
            <label for="email"> Email: </label><br>
            <input type="email"  name="email" placeholder="Email" required><br>
            <label for="subject">What is the subject of your query?</label><br>
            <textarea  name="subject" rows="1" cols="30" placeholder="Subject" required></textarea><br>
            <label for="text"> Please write your query:</label><br>
            <textarea id="text" name="text" rows="6" cols="55" placeholder="Write your query..." required></textarea><br> 
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