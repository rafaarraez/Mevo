<!DOCTYPE html>
<html lang="es" class="no-js">
    <!-- Head -->
    <head>
        <title>Mevo</title>

        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="keywords" content="Mevo">
        <meta name="description" content="Mevo">
        <link rel="apple-touch-icon" sizes="57x57" href="./img/icon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="./img/icon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="./img/icon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="./img/icon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="./img/icon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="./img/icon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="./img/icon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="./img/icon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="./img/icon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="./img/icon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./img/icon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="./img/icon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./img/icon/favicon-16x16.png">
        <link rel="manifest" href="./img/icon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('favicon.ico')}}" type="image/x-icon">

        <!-- Web Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Components Vendor Styles -->
        <link rel="stylesheet" href="{{ asset('font-awesome/css/all.min.css')}}">

        <!-- Theme Styles -->
        <link rel="stylesheet" href="{{ asset('css/theme.css')}}">
    </head>
    <!-- End Head -->

    <body>
        <main class="container-fluid w-100" role="main">
            <div class="row">
                @yield('content')

                <div class="col-lg-6 d-none d-lg-flex flex-column align-items-center justify-content-center bg-light">
                    <img class="img-fluid position-relative u-z-index-3 mx-5" src="{{ asset('img/logo/LogoMEVO.png')}}" alt="Image description">

                    <figure class="u-shape u-shape--top-right u-shape--position-5">
                        <img src="{{ asset('svg/shapes/shape-1.svg')}}" alt="Image description">
                    </figure>
                    <figure class="u-shape u-shape--center-left u-shape--position-6">
                        <img src="{{ asset('svg/shapes/shape-2.svg')}}" alt="Image description">
                    </figure>
                    <figure class="u-shape u-shape--center-right u-shape--position-7">
                        <img src="{{ asset('svg/shapes/shape-3.svg')}}" alt="Image description">
                    </figure>
                    <figure class="u-shape u-shape--bottom-left u-shape--position-8">
                        <img src="{{ asset('svg/shapes/shape-4.svg')}}" alt="Image description">
                    </figure>
                </div>
            </div>
        </main>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>