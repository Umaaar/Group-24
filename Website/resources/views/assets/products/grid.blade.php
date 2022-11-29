
<div class="py-5 album">
  <div class="container">
    <div class="row">
    
      @foreach($products as $product)
      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-body">
            <a href="products/men/preview/{{$product['id']}}">
              <img class="img-custom mx-auto d-block" src="{{URL::asset('aston_sport_clear.png')}}" width="300" height="200">
            </a>
            <p><b>{{ $product->name }}</b></p>  
              <p class="small text-left text-muted">£ {{ $product->price }} </p>
              <form action="{{ asset('addToBasket') }}" method="post">@csrf<input type="hidden" value="{{ $product['id']}}" name="id"><button type="submit" class="btn btn-sm btn-outline-secondary mx-auto d-block">Add to basket</button></form>
          </div>
        </div>
      </div>
      @endforeach

      

    </div>
  </div>
</div>
