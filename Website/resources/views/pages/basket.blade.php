<head>

    <!-- Import main -->
    @include('assets.main')
  
    <title>@yield('title')</title>
  </head>
  
  <body>
  
    <!-- Import header -->
    @include('assets.header')
  
    <div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-6">Basket</h1>
    </div>
  
    <!-- Insert basket view body here -->
  
    <!-- Import footer -->
    @include('assets.footer')
  
  </body>
  </html>
  