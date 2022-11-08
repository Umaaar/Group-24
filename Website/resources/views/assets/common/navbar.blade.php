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

      <div class="row">
        <button type="button" class="text-black btn btn-primary btn-sm mr-2">Login</button>
        <button type="button" class="text-black btn btn-light btn-sm mr-2">Register</button>

        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="white" class="bi bi-cart mr-2 mb-0.5" viewBox="0 0 16 16">
          <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
          <svg></a>
      </div>
    </nav>
  </head>
