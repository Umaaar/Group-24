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
    <p><a href="mailto: astondirect@outlook.com"> Send Query</a></p>

   
</div>

    <div class= "contactus_col2">
        <form>
            <label for="name"> Name: </label><br>
            <input type="text" id="name" name="name" placeholder="Name"><br>
            <label for="surname"> Surname: </label><br>
            <input type="text" id="surname" name="surname" placeholder="Surname"><br>
            <label for="email"> Email: </label><br>
            <input type="email" id="email" name="email" placeholder="Email"><br>
            <p><label for="product">What is your query about?</label></p>
            <input type="checkbox" id="product" name="product" value="Product">
            <label for="product">Product</label><br>
            <input type="checkbox" id="delivery" name="delivery" value="Delivery">
            <label for="delivery">Delivery</label><br>
            <p><label for="text"> Please write your query:</label></p>
            <textarea id="text" name="text" rows="10" cols="70" placeholder="Write your query..."></textarea><br>

        <input type="submit" value="Submit">
</form>
</div>

  <div class= "contactus_col3">

</div>
</div>






  <div class="container-2">
    <!-- Import footer -->
    @include('assets.common.footer')
  </div>
</body>

</html>