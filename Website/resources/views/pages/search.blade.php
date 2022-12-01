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

<div class="py-5 album">
    <div class="container">
        <div class="row">

          @if($searches->isNotEmpty())
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
            @else
            @endif

        </div>
    </div>
</div>
<div class="bg-light">
<div class="p-lg-5 col-md-5 my-auto mx-auto">
  <div class="text-center">
      <h1>Search Not Found</h1>
      <p class="text-muted lead">Please enter a new query below.</p>

      <div class="col-md-8 mx-auto mt-4">
        <form action="{{ url('/search') }}" method="GET" role="search">
          @csrf
          <div class="input-group">
            <input class="form-control" type="text" name="search" placeholder="Enter search here:" >
            <button class="btn-md btn-secondary text-light" type="submit">Search</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div style="height:410px;" class="bg-white"></div>

<!-- Import footer -->
@include('assets.common.footer')
