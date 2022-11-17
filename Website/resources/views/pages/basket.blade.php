<!-- Import main -->
@include('assets.main')

<!-- Import header -->
@include('assets.common.navbar')

<head>
  <title>@yield('title')</title>
</head>

<body>
  <div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-6">Basket</h1>
  </div>

    <!-- Insert basket view body here -->

    <!-- Import footer -->
    @include('assets.common.footer')

</body>
</html>
