<!-- Import boilerplate -->
@include('assets.main')

<!-- Import navigation bar -->
@include('assets.common.navbar')



<body>
  <div class="container-fluid">
    <div class="row">
      <div style="width: 300px;" class="d-flex flex-column p-4 text-white bg-dark">
      <h4 class="text-white ">Welcome</h4>
        <ul class="nav nav-pills flex-column mb-auto">
          <a href="/profile" class="nav-link text-white active">Home</a>
          <li>
            <a href="{{ asset('/orders') }}" class="nav-link text-white">My Orders</a>
          </li>
        </ul>
      </div>

      <div class="col-lg-10 pt-4">
        <div class="d-flex align-items-center mb-1">
          <h3><b>Profile</b></h3>
        </div>

        <div class="jumbotron border mb-4 bg-light">
          <div class="p-lg-1 col-md-5 mx-auto">       <!-- border-bottom border-secondary -->
            <h1 class="lead text-dark text-center"><u>Welcome User</u></h1>
            <p class="text-dark text-center">Use this page to navigate your user dashboard. Here, you will be able to access a list of all your previous completed orders.</p>
            <p class="text-dark text-center">To get started, use the navigation on the side of this page.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<!-- Import footer -->
@include('assets.common.footer')
