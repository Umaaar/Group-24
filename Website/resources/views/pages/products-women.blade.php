



<!-- Import boilerplate -->
@include('assets.main')



<!-- Import navigation bar -->
@include('assets.common.navbar')

<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oxygen');

        * {
            font-family: 'Oxygen'
        }
    </style>
</head>

@if ($errors->any())
<div class="alert alert-danger border-0 m-auto">
    @foreach ($errors->all() as $error)
        <h5>{{ $error }}</h5>
    @endforeach
</div>
@endif

    

<!-- Import page header -->
@include('assets.products.header-women')

       

<div class="py-5 album">
    <div class="container">
        <div class="row">

            @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <a href="products/preview/{{ $product['id'] }}">
                                <img class="img-custom mx-auto d-block"
                                    src="{{ URL::asset('/images/' . $product->images) }}" width="250" height="300">
                            </a>
                            <p><b>{{ $product->name }}</b></p>
                            <p class="text-md text-left text-muted">£ {{ $product->price }} </p>
                            <form action="{{ asset('addToBasket') }}" method="post">@csrf<input type="hidden"
                                    value="{{ $product['id'] }}" name="id"><button type="submit"
                                    class="btn btn-sm btn-outline-secondary mx-auto d-block">Add to basket</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>

<!-- Import footer -->
@include('assets.common.footer')
