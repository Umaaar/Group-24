<head>
  <style>
    .border-cust { border-color: black; }
    .bg-custom { background-color: #cccccc; }
    .carousel-control-prev-icon { background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E") !important; }
    .carousel-control-next-icon { background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E") !important; }
  </style>
  <link rel="stylesheet" href="{{asset('/css/home.css')}}">

  <title>@yield('title')</title>
</head>

<!-- Import main -->
@include('assets.main')

<!-- Import navbar -->
@include('assets.common.navbar')

<body>
  <div class="jumbotron my-0 bg-light">
    <div class="container">
      <h1 class="display-4 text-dark">Welcome</h1>
      <div class="p-lg-1 col-md-7 border-bottom border-secondary">
        <p class="text-dark">Aston Sport aims to provide only the best quality products with competitive prices, reliable delivery times, and unmatched customer service.</p>
        <p class="text-dark"><u>Be sure to check out our extensive product line below:</u></p>
      </div>
      <p><a class="btn btn-lg btn-primary mt-4" href="/products">View products...</a></p>
    </div>
  </div>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item d-flex justify-content-center">
        <img class="w-25" src="{{URL::asset('aston_sport_clear.png')}}">
      </div>
      <div class="carousel-item d-flex justify-content-center">
        <img class="w-25" src="{{URL::asset('aston_sport_clear.png')}}">
      </div>
      <div class="carousel-item d-flex justify-content-center">
        <img class="w-25" src="{{URL::asset('aston_sport_clear.png')}}">
      </div>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

  <div class="col-md-4 p-lg-5 mx-auto my-1">
    <p class="lead font-weight-normal text-dark">A modern, innovative, and affordable clothing retailer with an emphasis on sustainability and ethical sourcing.</p>
    <a class="btn btn-outline-dark d-block" href="/about">Find out more...</a>
  </div>

<!-- Import footer -->
@include('assets.common.footer')

</body>
</html>
