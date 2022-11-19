<!-- Import main -->
@include('assets.main')

<!-- Import header -->
@include('assets.common.navbar')

<head>
  <title>@yield('title')</title>
</head>

<body>
 
  <div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-6">Checkout</h1>
  </div>
    <!-- Insert checkout page here-->
    <section>
    <div class= "containter">
      <div class="row">
        <div class="col-md-6">
          <div class ="form-group">
            <label for="">First Name</label>
            <input type="text" class="form-control" placeholder="First name">
          </div>
        </div>
        <div class="col-md-6">
          <div class ="form-group">
            <label for="">Second Name</label>
            <input type="text" class="form-control" placeholder="Second name">
          </div>
        </div>
        <div class="col-md-6">
          <div class ="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" placeholder="Email">
          </div>
        </div>
        <div class="col-md-6">
          <div class ="form-group">
            <label for="">Address</label>
            <input type="text" class="form-control" placeholder="Address">
          </div>
        </div>
        <div class="col-md-6">
          <div class ="form-group">
            <label for="">Post Code</label>
            <input type="text" class="form-control" placeholder="Post code">
          </div>
        </div>

        <div class="col-md-12">
          <button type="submit" class="btn btn-primary">Place your order</button>
        </div>
      </div>
      <div>
      </section>

      

  



    <!-- Import footer -->
    @include('assets.common.footer')

</body>
</html>
