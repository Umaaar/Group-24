<!-- Import boilerplate -->
@include('assets.main')

<!-- Import navigation bar -->
@include('assets.common.navbar')

<head>
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Oxygen'); * { font-family: 'Oxygen' }
  </style>
</head>

@if ($errors->any())
<div class="alert alert-danger border-0 m-auto">
    @foreach ($errors->all() as $error)
        <h5>{{ $error }}</h5>
    @endforeach
</div>
@endif

<!-- Import product details -->
@include('assets.products.detail')


 
<!-- Import footer -->
@include('assets.common.footer')

