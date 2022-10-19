<head>

  <!-- Import main -->
  @include('layouts.main')

  <title>@yield('title')</title>
</head>

<body>

  <!-- Import header -->
  @include('assets.header')

  <div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h4 class="display-6">Product List</h4>
  </div>

  <!-- Insert Home body here -->

  <!-- Import footer -->
  @include('assets.footer')

</body>
</html>
