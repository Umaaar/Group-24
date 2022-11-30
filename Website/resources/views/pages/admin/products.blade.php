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
            <a href="/admin" class="nav-link text-white">Home</a>
            <li>
              <a href="/admin/orders" class="nav-link text-white">Order List</a>
              <a href="/admin/products" class="nav-link text-white active">Products List</a>
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

      <div class="col-lg-10 pt-4">
        <div class="d-flex align-items-center mb-1">
          <h3><b>Products List</b></h3>
        </div>

        <div class="table-responsive">
          <table class="table table-sm table-striped text-muted">
            <thead>
              <tr class="text-dark">
                <th>#</th>
                <th>Product Name</th>
                <th>Size</th>
                <th>Price (£)</th>
                <th>Stock</th>
                <th>Description</th>
                <th>Gender</th>
                <th>Image</th>
              </tr>
            </thead>
            <tbody>

              @foreach($products as $product)
              <tr>
                <td> {{ $product['id'] }} </td>
                <td> {{ $product['name'] }} </td>
                <td> {{ $product['size'] }} </td>
                <td> {{ $product['price'] }} </td>
                <td> {{ $product['stock'] }} </td>
                <td> {{ $product['description'] }} </td>
                <td> {{ $product['gender'] }} </td>
                <td> {{ $product['images'] }} </td>
              </tr>
              @endforeach

              <tr>
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              </tr>
              <tr>
                <td>2</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>4</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>5</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>6</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>7</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>8</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>9</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>10</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>11</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>12</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>13</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>14</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>15</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>

<!-- Import footer -->
@include('assets.common.footer')
