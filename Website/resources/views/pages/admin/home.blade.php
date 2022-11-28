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
                    <a href="/admin/editproduct" class="nav-link text-white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-gear-wide mx-1" viewBox="0 0 16 16">
                      <path d="M8.932.727c-.243-.97-1.62-.97-1.864 0l-.071.286a.96.96 0 0 1-1.622.434l-.205-.211c-.695-.719-1.888-.03-1.613.931l.08.284a.96.96 0 0 1-1.186 1.187l-.284-.081c-.96-.275-1.65.918-.931 1.613l.211.205a.96.96 0 0 1-.434 1.622l-.286.071c-.97.243-.97 1.62 0 1.864l.286.071a.96.96 0 0 1 .434 1.622l-.211.205c-.719.695-.03 1.888.931 1.613l.284-.08a.96.96 0 0 1 1.187 1.187l-.081.283c-.275.96.918 1.65 1.613.931l.205-.211a.96.96 0 0 1 1.622.434l.071.286c.243.97 1.62.97 1.864 0l.071-.286a.96.96 0 0 1 1.622-.434l.205.211c.695.719 1.888.03 1.613-.931l-.08-.284a.96.96 0 0 1 1.187-1.187l.283.081c.96.275 1.65-.918.931-1.613l-.211-.205a.96.96 0 0 1 .434-1.622l.286-.071c.97-.243.97-1.62 0-1.864l-.286-.071a.96.96 0 0 1-.434-1.622l.211-.205c.719-.695.03-1.888-.931-1.613l-.284.08a.96.96 0 0 1-1.187-1.186l.081-.284c.275-.96-.918-1.65-1.613-.931l-.205.211a.96.96 0 0 1-1.622-.434L8.932.727zM8 12.997a4.998 4.998 0 1 1 0-9.995 4.998 4.998 0 0 1 0 9.996z"/>
                    </svg>Edit Product</a>
                  </div>
                </li>
              </ul>
            </div>

            <div class="col-10 pt-4 px-4">
              <div class="d-flex">
                <h3><b>Home</b></h3>
              </div>

              <div class="jumbotron border mb-4 bg-light">
                <div class="p-lg-1 col-md-5 mx-auto">       <!-- border-bottom border-secondary -->
                  <h1 class="lead text-dark text-center"><u>Welcome</u></h1>
                  <p class="text-dark text-center">Use this page to navigate to the Administration pages. Here, you will be able to access a range of admin pages with full control, such as: customer list, product list, orders list, and a product editor & product creator.</p>
                  <p class="text-dark text-center">To get started, use the navigation on the side of this page.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </body>

  <!-- Import footer -->
  @include('assets.common.footer')
