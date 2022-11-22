<!-- Import boilerplate -->
@include('assets.main')

<!-- Import navigation bar -->
@include('assets.common.navbar')

<body>
  <div class="container-fluid">
    <div class="row">
      <div style="width: 300px;" class="d-flex p-4 flex-column text-white bg-dark">
        <h4 class="text-white ">Administration</h4>
      <ul class="nav nav-pills flex-column mb-auto">
        <a href="/admin" class="nav-link text-white" aria-current="page">Home</a>
        <li>
          <a href="/admin/orders" class="nav-link text-white">Order List</a>
          <a href="/admin/products" class="nav-link text-white">Products List</a>
          <a href="/admin/customers" class="nav-link text-white">Customer List</a>
        </li>
      </ul>
      <ul class="nav text-left flex-column">
        <li>
          <div class="border-top border-secondary">
            <a href="/admin/addproduct" class="nav-link text-white text-active"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-pencil mx-1" viewBox="0 0 16 16">
              <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
            </svg>Add Product</a>
            <a href="/admin/editproduct" class="nav-link text-white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-gear-wide mx-1" viewBox="0 0 16 16">
              <path d="M8.932.727c-.243-.97-1.62-.97-1.864 0l-.071.286a.96.96 0 0 1-1.622.434l-.205-.211c-.695-.719-1.888-.03-1.613.931l.08.284a.96.96 0 0 1-1.186 1.187l-.284-.081c-.96-.275-1.65.918-.931 1.613l.211.205a.96.96 0 0 1-.434 1.622l-.286.071c-.97.243-.97 1.62 0 1.864l.286.071a.96.96 0 0 1 .434 1.622l-.211.205c-.719.695-.03 1.888.931 1.613l.284-.08a.96.96 0 0 1 1.187 1.187l-.081.283c-.275.96.918 1.65 1.613.931l.205-.211a.96.96 0 0 1 1.622.434l.071.286c.243.97 1.62.97 1.864 0l.071-.286a.96.96 0 0 1 1.622-.434l.205.211c.695.719 1.888.03 1.613-.931l-.08-.284a.96.96 0 0 1 1.187-1.187l.283.081c.96.275 1.65-.918.931-1.613l-.211-.205a.96.96 0 0 1 .434-1.622l.286-.071c.97-.243.97-1.62 0-1.864l-.286-.071a.96.96 0 0 1-.434-1.622l.211-.205c.719-.695.03-1.888-.931-1.613l-.284.08a.96.96 0 0 1-1.187-1.186l.081-.284c.275-.96-.918-1.65-1.613-.931l-.205.211a.96.96 0 0 1-1.622-.434L8.932.727zM8 12.997a4.998 4.998 0 1 1 0-9.995 4.998 4.998 0 0 1 0 9.996z"/>
            </svg>Edit Product</a>
          </div>
        </li>
      </ul>
    </div>

    <div class="col-lg-10 pt-4 px-4">
      <div class="mb-4">
        <h3><b>Edit Product</b></h3>
      </div>
      <div class="row">
        <div class="col-md-4 order-md-2">
          <h4 class="justify-content-center mx-auto text-center text-muted">Product Image</h4>
          <ul class="list-group">
            <li class="list-group-item">
              <li class="list-group-item d-flex bg-light">
                <div style="height: 250px;" class="bg-dark">
                </div>
              </li>
            </li>

            <form>  <!-- list-group-item -->
              <div class=" d-flex">
                <label for="addImage"></label>
                <input type="file" class="form-control-file btn-sm btn-secondary" id="addImage">
              </div>
            </form>
          </ul>
        </div>

        <!-- <li class="list-group-item d-flex align-middle my-auto justify-content-around">
          <button type="submit" class="btn btn-sm btn-secondary">Add Image</button>
        </li> -->

        <div class="col-md-8">
          <form action="{{ url('add-product') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-md-6">
                <label for="productID">ID</label>
                <input type="text muted" class="form-control" id="productID" placeholder="#" value="" disabled>
              </div>
              <div class="col-md-6 mb-4">
                <label for="name">Product Name</label>
                <input type="text" class="form-control" id="name" placeholder="" value="">
              </div>
              <div class="col-md-6 mb-4">
                <label for="size">Size</label>
                <input type="number" class="form-control" id="size" placeholder="" value="">
              </div>

              <div class="col-md-6 mb-4">
               <label for="price">Price (£)</label>
               <input type="number" class="form-control" id="price" placeholder="£" value="">
              </div>
            </div>

            <div class="mb-4">
              <label for="stock">Stock</label>
              <input type="number" class="form-control" id="stock">
            </div>
              <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" rows="7"></textarea>
              </div>
              <label for="gender">Gender</label>
              <select class="custom-select" id="gender" required>
                <option value=""Select gender:</option>
                <option>Male</option>
                <option>Female</option>
              </select>

            <div class="my-4">
              <button class="btn btn-success btn-mg mx-auto d-block" type="submit" for="submit" id="submit">Add Product</button>
            </div>
            @csrf
          </form>
        </div>
      </div>
    </div>
    </div>
  </div>
</body>

<!-- Import footer -->
@include('assets.common.footer')
