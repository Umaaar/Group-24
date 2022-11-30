<!-- Import main -->
@include('assets.main')

<!-- Import header -->
@include('assets.common.navbar')

<head>
    <title>@yield('title')</title>



</head>

<?php $total = 0;
$decoded = json_decode(json_encode($basket), true);
?>

<body>

    <!-- Insert basket view body here -->
    
        <div class="bg-light">
            <div class="p-lg-5 col-md-5 mx-auto">
                <div class="text-center">
                <h1>Basket</h1>
              </div>
            </div>
          </div>
      

    <div class="container-fluid d-fluid mx-auto my-4 my-auto col-lg-8 pt-10">
        <table class="table table-bordered table table-striped  w-10">
            <thead class="thead-primary table-sm table_col_padding">
                <tr>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Ops</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($decoded as $item)
                    <?php $total += $item['totalprice'] * $item['quantity']; ?>
                    <tr>
                        <form action="removeFromBasket" method="POST">
                            @csrf
                            <td>{{ $item['name'] }}</td>
                            <td>£{{ $item['totalprice'] }}</td>
                            <td>{{ $item['quantity'] }}</td>
                            <td><button type="submit" class="btn btn-danger">Remove</button></td>
                            <input type="hidden" name="basketcontentsid" value="{{ $item['basketcontentsid'] }}">
                        </form>
                    </tr>
                @endforeach
            </tbody>
        </table>


        <div class="row">
            <div class="col-sm-4 alert alert-primary mx-3">
                <span>
                    <strong>Total: £{{ $total }}</strong>
                </span>
            </div>
            <div class="col-sm-4">
                <a href="{{ asset('/checkout') }}" class="btn btn-primary">Checkout</a>
            </div>
        </div>
    </div>



    <div style="height:80px;" class="bg-white">

    </div>


    <!-- Import footer -->
    @include('assets.common.footer')

</body>

</html>
