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

      <div class="col-lg-10 ml-2 pt-4">
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
           <?php
            $decoded = json_decode(json_encode($orders), true);
            if($decoded !== null)
          {
            foreach ($decoded as $order) {
              ?>
              <tr>
                <td> <?= $order['orderck']; ?> </td>
                <td> <?= $order['name']; ?> </td>
                <td> <?= $order['size']; ?> </td>
                <td> <?= $order['price']; ?> </td>
            </tr>
            <?php
            }

          } else {

            echo "You haven't made any orders!";
          }
          ?>
              <tr>
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>2</td>
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
              </tr>
              <tr>
                <td>4</td>
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
              </tr>
              <tr>
                <td>6</td>
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
              </tr>
              <tr>
                <td>8</td>
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
              </tr>
              <tr>
                <td>10</td>
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
              </tr>
              <tr>
                <td>12</td>
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
              </tr>
              <tr>
                <td>14</td>
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
