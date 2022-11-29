<link rel="stylesheet" href="{{asset('/css/product.css')}}">

<section class="container product my-5 pt-5">
    <div class="row mt-5">
        <div class="col-lg-5 col-md-12 col-12">
            <img class ="img-fluid w-100" src="{{ URL::asset('/images/' . $product->images) }}" alt="">
        </div>
        <div class ="col-lg-6 col-md-12 col-12">
            <h3 class="pt-3 font-weight-bold">{{$product['name']}}</h3>
            <h4 class="pb-4 text-muted">£{{$product['price']}}</h6>

                <form class="form">
                    <select class="custom-select mb-3">
                      <option selected>Sizes:</option>
                      <option value="1">XL</option>
                      <option value="2">L</option>
                      <option value="3">M</option>
                      <option value="4">S</option>
                      <option value="5">XS</option>
                    </select>

                    <select class="custom-select mb-3">
                        <option selected>Quantity:</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="7">8</option>
                        <option value="7">9</option>
                      </select>


                </form>

            <button class="btn btn-primary">Add to Cart</button>
            <h4 class="mt-5 mb-3">Product Details</h4>
            <span>
                {{$product['description']}}
            </span>
        </div>




    </div>
</section>
