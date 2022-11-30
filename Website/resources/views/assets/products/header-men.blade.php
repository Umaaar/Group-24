<div class="bg-light">
<div class="p-lg-5 col-md-5 mx-auto">
  <div class="text-center">
      <h1>Men's Clothing</h1>
      <p class="text-muted lead">Check out our selection on Men's clothing on this page. Looking for something else? Search for another product below...</p>

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
