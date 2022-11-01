<head>

  <!-- Import main -->
  @include('assets.main')

  <title>@yield('title')</title>
</head>

<body>

  <!-- Import header -->
  @include('assets.common.navbar')

  <div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-6">About-Us</h1>
  </div>

  <!-- Insert Home body here -->

  <!-- Import footer -->
  @include('assets.common.footer')

</body>
</html>
