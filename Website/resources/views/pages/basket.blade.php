<!-- Import main -->
@include('assets.main')

<!-- Import header -->
@include('assets.common.navbar')

<head>
  <title>@yield('title')</title>

 

</head>

<?php $total = 0; 
$decoded = json_decode(json_encode($basket), true)
?>

<body>

    <!-- Insert basket view body here -->
    <div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-6">Basket</h1>
    </div>
    <table class="table table-bordered">
      <thead class="thead-primary">
        <tr>
          <th scope="col">Product</th>
          <th scope="col">Price</th>
          <th scope="col">Qty</th>
          <th scope="col">Ops</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($decoded as $item)
        <?php $total += $item['totalPrice'] * $item['quantity']?>
        <tr>
          <td>{{$item['name']}}</td>
          <td>£{{ $item['totalPrice'] }}</td>
          <td>{{ $item['quantity'] }}</td>
          <td>
            <button type="button" class="btn btn-primary">+</button>
            <button type="button" class="btn btn-danger">-</button>
        </tr>
        @endforeach
      </tbody>
    </table>
   
    
    <div class="row">
      <div class="col-sm-4 alert alert-primary">
    <span>
        <strong>Total: £{{ $total}}</strong>
    </span>
      </div>
      <div class="col-sm-4">
        <a href="{{ asset('/checkout') }}" class="btn btn-primary">Checkout</a>
      </div>
    </div>


    



                      
    


                  
         
    <!-- Import footer -->
    @include('assets.common.footer')

</body>
</html>
