
<div class="py-5 album">
  <div class="container">
    <div class="row">

      @foreach($products as $product)
      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-body">
            <a href="products/men/preview/{{$product['id']}}">
              <img class="img-custom mx-auto d-block" src="{{ URL::asset('/images/' . $product->images) }}" width="300" height="200">
            </a>
            <p><b>{{ $product->name }}</b></p>
              <p class="small text-left text-muted">£ {{ $product->price }} </p>
              <button type="button" class="btn btn-sm btn-outline-secondary mx-auto d-block">Add to basket</button>
          </div>
        </div>
      </div>
      @endforeach

    </div>
  </div>
</div>
