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
          <a href="/profile" class="nav-link text-white">Home</a>
          <li>
            <a href="/profile/orders" class="nav-link text-white active">My Orders</a>
          </li>
        </ul>
      </div>

      <div class="col-lg-10 pt-4">
        <div class="d-flex align-items-center mb-1">
          <h3><b>My Orders</b></h3>
        </div>

        <div class="table-responsive">
          <table class="table table-sm table-striped text-muted">
            <thead>
              <tr class="text-dark">
                <th>#</th>
                <th>Product Name</th>
                <th>Size</th>
                <th>Price (£)</th>
              </tr>
            </thead>

            <tbody>
            @foreach($orders as $order)
              <tr>
                <td> <?= $order['orderid']; ?> </td>
                <td> <?= $order['name']; ?> </td>
                <td> <?= $order['size']; ?> </td>
                <td> <?= $order['price']; ?> </td>
            </tr>
            @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>

<!-- Import footer -->
@include('assets.common.footer')
