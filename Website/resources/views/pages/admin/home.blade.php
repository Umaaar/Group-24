  <!-- Import boilerplate -->
  @include('assets.main')

  <!-- Import navigation bar -->
  @include('assets.common.navbar')

    <body>
      <div class="container-fluid">
          <div class="row">
            <div style="width: 300px;" class="col-2 d-flex flex-column p-4 text-white bg-dark">
            <h4 class="text-white ">Administration</h4>
              <ul class="nav nav-pills flex-column mb-auto">
                <a href="/admin" class="nav-link text-white active">Home</a>
                <li>
                  <a href="/admin/orders" class="nav-link text-white">Order List</a>
                  <a href="/admin/products" class="nav-link text-white">Products List</a>
                  <a href="/admin/customers" class="nav-link text-white">Customer List</a>
                </li>
              </ul>
                <ul class="nav nav-pills flex-column ">
                <li>
                  <div class="border-top border-secondary">
                    <a href="/admin/addproduct" class="nav-link text-white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-pencil mx-1" viewBox="0 0 16 16">
                      <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                    </svg>Add Product</a>
                  </div>
                </li>
              </ul>
            </div>

            <div class="col-lg-10 pt-4 px-4">
              <div class="mb-4">
                <h3><b>Home</b></h3>
              </div>

              <div style="height:500px;" class="jumbotron border mt-4 bg-light">
                <div class="p-lg-1 col-md-5 mx-auto">       <!-- border-bottom border-secondary -->
                  <h1 class="lead text-dark text-center"><u>Welcome</u></h1>
                  <p class="text-dark text-center my-4">Use this page to navigate to the Administration pages. Here, you will be able to access a range of admin pages with full control, such as: customer list, product list, orders list, and a product editor & product creator.</p>
                  <p class="text-dark text-center my-4">To get started, use the navigation on the side of this page.</p>
                  <img class="d-block mx-auto" src="{{ URL::asset('aston_sport_clear.png')}}" alt="">
                </div>
              </div>
            </div>

            <div style="height:680px;" class="bg-white">

            </div>


          </div>
        </div>
      </body>

  <!-- Import footer -->
  @include('assets.common.footer')
