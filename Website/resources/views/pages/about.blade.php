<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Import main -->
    <link rel="stylesheet" href="/Website/public/css/about.css">
    @include('assets.main')

    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="/css/about.css">
 <!-- added the link to the style sheet -->

</head>

<html>

<body>

    <!-- Import header -->
    @include('assets.common.navbar')

  <!--<div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-6">About-Us</h1> 
  </div> -->

    <!-- Insert About body here -->

  <section class="coontainer-about-us">
    <div class="container-sub-image">
      <img src="aston.jpg" alt="image" >
      <!-- intake, Available at: https://intake.education/ng/university/aston-university. Accessed: 29/11/22-->
</div>
    <div class="container-sub-about">
    <img src="{{ URL::asset('logo.jpg') }}" alt="" style="width:50px;">
    <!-- Running Sport Athlete, Clker-Free-Vector-Images,  Canva, Available at:https://www.canva.com/icons/MAEF43O25uU-running-sport-athlete/. Accessed: 09/11/22 -->
      <h1> About Us</h1>

            <p>AstonDirect is an e-commerce platform for students. We sell great quality sports clothing at affordable
                prices perfect for all students on a tight budget. Our modern look reflects our emphasis on being
                ethical and sustainable durin development of our products. We are proud to be able to provide such a
                service and hope all you guys are as excited about AstonDirect as we are.
            </p> <br>

            <h7> Where we are? </h7>
            <p>Aston Express Way Birmingham<br>
               B4 7ET, Birmingham</p>
        </div>
</section>




    <div class="container-2">
        <!-- Import footer -->
        @include('assets.common.footer')
    </div>
</body>

</html>
