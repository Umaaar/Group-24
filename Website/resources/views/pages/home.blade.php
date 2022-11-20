<head>
  <style>
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
  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active mx-auto d-block">
        <img src="{{URL::asset('aston_sport_clear.png')}}" class="mx-auto d-block" alt="">
      </div>
      <div class="carousel-item">
        <img src="{{URL::asset('aston_sport.png')}}"class="mx-auto d-block" alt="">
      </div>
      <div class="carousel-item">
        <img src="{{URL::asset('aston_sport_clear.png')}}"class="mx-auto d-block" alt="">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

  <div class="p-3 p-md-5 text-white bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-5">Welcome</h1>
      <p class="display-6 my-3">Test</p>
    </div>
  </div>

  <div class="py-5 album">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4">
            <div class="card-body">
              <img class="img-custom mx-auto d-block" src="{{URL::asset('aston_sport_clear.png')}}" width="300" height="200">
              <p class="text-center"><b>Hoodies</b></p>
                <button type="button" class="btn btn-sm btn-outline-secondary mx-auto d-block">View all products</button>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4">
            <div class="card-body">
              <img class="img-custom mx-auto d-block" src="{{URL::asset('aston_sport_clear.png')}}" width="300" height="200">
              <p class="text-center"><b>Trousers</b></p>
                <button type="button" class="btn btn-sm btn-outline-secondary mx-auto d-block">View all products</button>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4">
            <div class="card-body">
              <img class="img-custom mx-auto d-block" src="{{URL::asset('aston_sport_clear.png')}}" width="300" height="200">
              <p class="text-center"><b>Sports Gear</b></p>
              <button type="button" class="btn btn-sm btn-outline-secondary mx-auto d-block">View all products</button>
          </div>
        </div>
      </div>
    </div>

      <div class="jumbotron border my-0 bg-light">
        <div class="container">
          <div class="p-lg-1 col-md-7 mx-auto">       <!-- border-bottom border-secondary -->
            <p class="lead text-dark text-center">Aston Sport aims to provide only the best quality products with competitive prices, reliable delivery times, and unmatched customer service.</p>
            <p class="text-dark text-center">Be sure to check out our extensive product line below!</p>
          </div>
            <button type="button" class="btn btn-lg btn-outline-secondary mx-auto d-block">Learn more...</button>
        </div>
      </div>
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
