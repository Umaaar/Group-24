<head>
<link rel="stylesheet" href="{{asset('/css/navbar.css')}}">

  <nav class="navbar navbar-expand-lg navbar-dark border-dark border-bottom">
    <a href="#" class="px-4 navbar-brand">
      <img src="{{URL::asset('aston_sport.png')}}" width="170" height="75">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto">
        <li class="nav-item active px-4">
          <a class="nav-link" href="/">HOME</a>
        </li>
        <li class="nav-item active px-4">
          <a class="nav-link" href="/men">MEN</a>
        </li>
        <li class="nav-item active px-4">
          <a class="nav-link" href="/women">WOMEN</a>
        </li>
        <li class="nav-item active px-4">
          <a class="nav-link" href="/about">ABOUT</a>
        </li>
        <li class="nav-item active px-4">
          <a class="nav-link" href="/profile">PROFILE</a>
        </li>
    </ul>
      @if(!(Auth::check() || Auth::guard('webadmins')->check()))
      <a type="btn" class="p4-auto text-black btn btn-primary btn-sm mr-2" href="/login">Login</a>
      <a type="btn" class="p4-auto text-black btn btn-light btn-sm mr-2" href="/register">Register</a>
      @else
        <a type="btn" class="p4-auto text-black btn btn-primary btn-sm mr-2" href="{{asset('logOut')}}">LogOut</a>

      @endif
      <a href="/basket"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-cart" viewBox="0 0 16 16">
      <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
      </svg></a>
  </nav>
</head>
