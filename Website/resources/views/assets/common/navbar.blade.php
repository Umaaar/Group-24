<head>
  <style>
    .navbar-dark { background: black; }
    .border-bottom { border-width:2px !important; }
    .navbar-nav { margin-left: -50px; font-size: 20px; }
    .vertical { border: 1px solid white; margin-right: 150px; height: 50px; }
  </style>

  <nav class="navbar navbar-expand-lg navbar-dark border-dark border-bottom">
    <img class="img-custom" src="{{URL::asset('aston_sport.png')}}" width="170" height="75">

    <div class="navbar-collapse justify-content-center">
      <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item active pl-4 pr-4"><a class="nav-link" href="#"><b>HOME</b></a></li>
          <li class="nav-item active pl-4 pr-4"><a class="nav-link" href="#"><b>MEN</b></a></li>
          <li class="nav-item active pl-4 pr-4"><a class="nav-link" href="#"><b>WOMEN</b></a></li>
          <li class="nav-item active pl-4 pr-4"><a class="nav-link" href="#"><b>ABOUT US</b></a></li>
          <li class="nav-item active pl-4 pr-4"><a class="nav-link" href="#"><b>DASHBOARD</b></a></li>
        </ul>
      </div>
    <!-- <div class="vertical"></div> -->
    <div class="row">
      <button type="button" class="btn btn-primary btn-sm mr-2">Login</button>
      <button type="button" class="btn btn-secondary btn-sm mr-2">Register</button>
    </div>
  </nav>
</head>
