<!-- Import boilerplate -->
@include('assets.main')

<!-- Import navigation bar -->
@include('assets.common.navbar')

<head>
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Oxygen'); * { font-family: 'Oxygen' }
  </style>
</head>

<!-- Import page header -->
@include('assets.products.header')

<!-- Import product cards header -->
@include('assets.products.grid')

<!-- Import footer -->
@include('assets.common.footer')
