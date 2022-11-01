@include('assets.common.navbar')

<head>
  <link href="resources/css/style.css" rel="stylesheet">

  <!-- Import main -->
  @include('assets.main')

  <title>@yield('title')</title>
</head>

<body>
  <div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <img class="img-custom" src="{{URL::asset('aston_sport_clear.png')}}" width="370" height="200">
    <!-- <h1 class="display-6"></h1> -->
  </div>

  <!-- ##################################### -->
  <!-- ########## START HOME BODY ########## -->
  <!-- ##################################### -->

 <!-- p-md-5 p-3 m-md-3 overflow-hidden -->
<div class="position-relative text-center bg-light">
  <div class="col-md-4 p-lg-5 mx-auto my-5">
    <!-- <img class="img-custom" src="{{URL::asset('product1.jpg')}}"> -->
    <p class="lead font-weight-normal">A modern, innovative, and affordable clothing retailer with an emphasis on sustainability and ethical sourcing.</p>
    <a class="btn btn-outline-secondary" href="#">Find out more...</a>
  </div>

</div>
    <!-- ################################### -->
    <!-- ########## END HOME BODY ########## -->
    <!-- ################################### -->

  <!-- Import footer -->
  @include('assets.common.footer')
</body>
</html>
