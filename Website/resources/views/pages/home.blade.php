<head>
    <link rel="stylesheet" href="{{ asset('/css/home.css') }}">

    <style>
        #menu-container {
            position: absolute;
            white-space: nowrap;
            overflow: hidden;

        }
    </style>

    <title>@yield('title')</title>
</head>

<!-- Import main -->
@include('assets.main')

<!-- Import navbar -->
@include('assets.common.navbar')
<?php
$name = '';
if (Auth::check()) {
    $name = Auth::user()->firstName;
}
?>

<body>

    <div class="d-flex justify-content-between">
        <div class="w-100 mx-auto">
            <div class="mx-auto bg-dark">
                <div id="test" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-50 mx-auto" src="{{ URL::asset('aston_sport_clear.png') }}"
                                alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-50 mx-auto" src="{{ URL::asset('aston_sport.png') }}"
                                alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-50 mx-auto" src="{{ URL::asset('aston_sport_clear.png') }}"
                                alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#test" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#test" role="button" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="d-flex">
            <div class="border-left border-secondary bg-dark px-5 w-100">
                <!-- col-md-3 -->
                <h1 class="display-5 text-light py-2">Welcome <?php echo $name; ?></h1>
                <!-- <p class="display-6 my-3 text-light">Test</p> -->
                <p class="font-weight-normal text-light">A modern, innovative, and affordable clothing retailer perfect
                    for students on a budget.</p>
                <p class="font-weight-normal text-light">Register and login to begin ordering and access your past
                    orders via the user profile dashboard.</p>
                <!-- <p class="font-weight-normal text-light">Alternatively, browse our products pages using the navigation bar above.</p> -->
                <a class="btn btn-secondary d-block " href="/about">Find out more...</a>
            </div>
        </div>
    </div>

    <div class="p-lg-5 col-md-5 mx-auto my-2 py-0">
        <div class="text-center">
            <h2>Recommended Items</h2>
        </div>
    </div>

    <div class="pb-5 album">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <img class="img-custom mx-auto d-block" src="{{ URL::asset('aston_sport_clear.png') }}"
                                width="300" height="200">
                            <p class="text-center"><b>Hoodies</b></p>
                            <button type="button" class="btn btn-sm btn-outline-secondary mx-auto d-block">View all
                                products</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <img class="img-custom mx-auto d-block" src="{{ URL::asset('aston_sport_clear.png') }}"
                                width="300" height="200">
                            <p class="text-center"><b>Trousers</b></p>
                            <button type="button" class="btn btn-sm btn-outline-secondary mx-auto d-block">View all
                                products</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <img class="img-custom mx-auto d-block" src="{{ URL::asset('aston_sport_clear.png') }}"
                                width="300" height="200">
                            <p class="text-center"><b>Sports Gear</b></p>
                            <button type="button" class="btn btn-sm btn-outline-secondary mx-auto d-block">View all
                                products</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="jumbotron border my-0 bg-light">
                <div class="container">
                    <div class="p-lg-1 col-md-7 mx-auto">
                        <!-- border-bottom border-secondary -->
                        <p class="lead text-dark text-center">Aston Sport aims to provide only the best quality products
                            with competitive prices, reliable delivery times, and unmatched customer service.</p>
                        <p class="text-dark text-center">Be sure to check out our extensive product line below!</p>
                    </div>
                    <button type="button" class="btn btn-lg btn-outline-secondary mx-auto d-block">Learn
                        more...</button>
                </div>
            </div>
        </div>
    </div>

    <img class="img-custom mx-auto d-block" src="{{ URL::asset('Second_Slide_Show_Image.png.jpg') }}" width="500"
        height="350">

    <div class="col-md-4 p-lg-5 mx-auto my-1">
        <p class="lead font-weight-normal text-dark">A modern, innovative, and affordable clothing retailer with an
            emphasis on sustainability and ethical sourcing.</p>
        <a class="btn btn-outline-dark d-block" href="/about">Find out more...</a>
    </div>

    <!-- Import footer -->
    @include('assets.common.footer')

</body>

</html>
