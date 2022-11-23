<!-- Import main -->
@include('assets.main')

<!-- Import header -->
@include('assets.common.navbar')

<head>
  <title>@yield('title')</title>

 

</head>

<body>

    <!-- Insert basket view body here -->
    <div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-6">Basket</h1>
    </div>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Product</th>
          <th scope="col">Price</th>
          <th scope="col">Qty</th>
        </tr>
      </thead>
      <tbody>
        <?php $total = 0; ?>
        @foreach ($basket as $item)
        <?php $total += $item['totalPrice'] * $item['quantity']; ?>
        <tr>
         
          <td>${{ $item['totalPrice'] }}</td>
          <td>{{ $item['quantity'] }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    
    <p>
        <strong>Total: ${{ $total}}</strong>
    </p>
    



                      
    


                  
         
    <!-- Import footer -->
    @include('assets.common.footer')

</body>
</html>
