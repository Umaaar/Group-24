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

<?php
$name = $query;


 ?>

<div class="py-5 album">
    <div class="container">
        <div class="row">

<p><?php echo($name) ?></p>

            @foreach ($searches as $item)

                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <a href="products/preview/{{ $item['id'] }}">
                                <img class="img-custom mx-auto d-block"
                                    src="{{ URL::asset('/images/' . $item->images) }}" width="250" height="300">
                            </a>
                            <p><b>{{ $item->name }}</b></p>
                            <p class="text-md text-left text-muted">£ {{ $item->price }} </p>
                            <form action="{{ asset('addToBasket') }}" method="post">@csrf<input type="hidden"
                                    value="{{ $item['id'] }}" name="id"><button type="submit"
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
